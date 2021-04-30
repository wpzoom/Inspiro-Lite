/**
 * File typography.js
 *
 * Handles Typography of the site
 *
 * @see https://github.com/brainstormforce/astra/blob/master/inc/customizer/custom-controls/typography/typography.js
 */

(function ($) {
	/* Internal shorthand */
	var api = wp.customize;

	/**
	 * Helper class for the main Customizer interface.
	 *
	 * @since x.x.x
	 * @class InspiroTypography
	 */
	InspiroTypography = {
		/**
		 * Initializes our custom logic for the Customizer.
		 *
		 * @since x.x.x
		 * @method init
		 */
		init: function () {
			InspiroTypography._initFonts();
		},

		/**
		 * Initializes logic for font controls.
		 *
		 * @since x.x.x
		 * @access private
		 * @method _initFonts
		 */
		_initFonts: function () {
			$(".customize-control-inspiro-font-family select").each(
				function () {
					if ("undefined" != typeof inspiroCustomControl.customizer) {
						var fonts =
							inspiroCustomControl.customizer.settings
								.google_fonts;
						var optionName = $(this).data("name");

						$(this).html(fonts);

						// Set inherit option text defined in control parameters.
						$(
							"select[data-name='" +
								optionName +
								"'] option[value='inherit']"
						).text($(this).data("inherit"));

						var font_val = $(this).data("value");

						$(this).val(font_val);
					}
				}
			);

			$(".customize-control-inspiro-font-family select").each(
				InspiroTypography._initFont
			);
			// Added select2 for all font family & font variant.
			$(
				".customize-control-inspiro-font-family select, .customize-control-inspiro-font-variant select"
			).selectWoo();

			$(".customize-control-inspiro-font-variant select").on(
				"select2:unselecting",
				function (e) {
					var variantSelect = $(this).data("customize-setting-link"),
						unselectedValue = e.params.args.data.id || "";

					if (unselectedValue) {
						$(this)
							.find(
								'option[value="' + e.params.args.data.id + '"]'
							)
							.removeAttr("selected");
						if (null === $(this).val()) {
							api(variantSelect).set("");
						}
					}
				}
			);
		},

		/**
		 * Initializes logic for a single font control.
		 *
		 * @since x.x.x
		 * @access private
		 * @method _initFont
		 */
		_initFont: function () {
			var select = $(this),
				link = select.data("customize-setting-link"),
				weight = select.data("connected-control"),
				variant = select.data("connected-variant");

			if ("undefined" != typeof link && "undefined" != typeof weight) {
				api(link).bind(InspiroTypography._fontSelectChange);
				InspiroTypography._setFontWeightOptions.apply(api(link), [
					true,
				]);
			}

			if ("undefined" != typeof link && "undefined" != typeof variant) {
				api(link).bind(InspiroTypography._fontSelectChange);
				InspiroTypography._setFontVarianttOptions.apply(api(link), [
					true,
				]);
			}
		},

		/**
		 * Callback for when a font control changes.
		 *
		 * @since x.x.x
		 * @access private
		 * @method _fontSelectChange
		 */
		_fontSelectChange: function () {
			var fontSelect = api.control(this.id).container.find("select"),
				variants = fontSelect.data("connected-variant");

			InspiroTypography._setFontWeightOptions.apply(this, [false]);

			if ("undefined" != typeof variants) {
				InspiroTypography._setFontVarianttOptions.apply(this, [false]);
			}
		},

		/**
		 * Clean font name.
		 *
		 * Google Fonts are saved as {'Font Name', Category}. This function cleanes this up to retreive only the {Font Name}.
		 *
		 * @since  x.x.x
		 * @param  {String} fontValue Name of the font.
		 *
		 * @return {String}  Font name where commas and inverted commas are removed if the font is a Google Font.
		 */
		_cleanGoogleFonts: function (fontValue) {
			// Bail if fontVAlue does not contain a comma.
			if (!fontValue.includes(",")) return fontValue;

			var splitFont = fontValue.split(",");
			var pattern = new RegExp("'", "gi");

			// Check if the cleaned font exists in the Google fonts array.
			var googleFontValue = splitFont[0].replace(pattern, "");
			if (
				"undefined" !=
				typeof InspiroFontFamilies.google[googleFontValue]
			) {
				fontValue = googleFontValue;
			}

			return fontValue;
		},

		/**
		 * Get font Weights.
		 *
		 * This function gets the font weights values respective to the selected fonts family{Font Name}.
		 *
		 * @since  x.x.x
		 * @param  {String} fontValue Name of the font.
		 *
		 * @return {String}  Available font weights for the selected fonts.
		 */
		_getWeightObject: function (fontValue) {
			var weightObject = ["400", "600"];
			if (fontValue == "inherit") {
				weightObject = [
					"100",
					"200",
					"300",
					"400",
					"500",
					"600",
					"700",
					"800",
					"900",
				];
			} else if (
				"undefined" != typeof InspiroFontFamilies.system[fontValue]
			) {
				weightObject = InspiroFontFamilies.system[fontValue].weights;
			} else if (
				"undefined" != typeof InspiroFontFamilies.google[fontValue]
			) {
				weightObject = InspiroFontFamilies.google[fontValue][0];
				weightObject = Object.keys(weightObject).map(function (k) {
					return weightObject[k];
				});
			} else if (
				"undefined" != typeof InspiroFontFamilies.custom[fontValue]
			) {
				weightObject = InspiroFontFamilies.custom[fontValue].weights;
			}

			return weightObject;
		},

		/**
		 * Sets the options for a font weight control when a
		 * font family control changes.
		 *
		 * @since x.x.x
		 * @access private
		 * @method _setFontWeightOptions
		 * @param {Boolean} init Whether or not we're initializing this font weight control.
		 */
		_setFontWeightOptions: function (init) {
			var i = 0,
				fontSelect = api.control(this.id).container.find("select"),
				fontValue = this(),
				selected = "",
				weightKey = fontSelect.data("connected-control"),
				weightSelect = api.control(weightKey).container.find("select"),
				currentWeightTitle = weightSelect.data("inherit"),
				weightValue = init ? weightSelect.val() : "400",
				inheritWeightObject = ["inherit"],
				weightObject = ["400", "600"],
				weightOptions = "",
				weightMap = inspiroCustomControl.font_weight;
			if (fontValue == "inherit") {
				weightValue = init ? weightSelect.val() : "inherit";
			}

			var fontValue = InspiroTypography._cleanGoogleFonts(fontValue);
			var weightObject = InspiroTypography._getWeightObject(fontValue);

			weightObject = $.merge(inheritWeightObject, weightObject);
			weightMap["inherit"] = currentWeightTitle;
			for (; i < weightObject.length; i++) {
				if (0 === i && -1 === $.inArray(weightValue, weightObject)) {
					weightValue = weightObject[0];
					selected = ' selected="selected"';
				} else {
					selected =
						weightObject[i] == weightValue
							? ' selected="selected"'
							: "";
				}
				if (!weightObject[i].includes("italic")) {
					weightOptions +=
						'<option value="' +
						weightObject[i] +
						'"' +
						selected +
						">" +
						weightMap[weightObject[i]] +
						"</option>";
				}
			}

			weightSelect.html(weightOptions);

			if (!init) {
				api(weightKey).set("");
				api(weightKey).set(weightValue);
			}
		},

		/**
		 * Sets the options for a font variant control when a
		 * font family control changes.
		 *
		 * @since x.x.x
		 * @access private
		 * @method _setFontVarianttOptions
		 * @param {Boolean} init Whether or not we're initializing this font variant control.
		 */
		_setFontVarianttOptions: function (init) {
			var i = 0,
				fontSelect = api.control(this.id).container.find("select"),
				fontValue = this(),
				selected = "",
				variants = fontSelect.data("connected-variant"),
				variantSelect = api.control(variants).container.find("select"),
				variantSavedField = api
					.control(variants)
					.container.find(".inspiro-font-variant-hidden-value"),
				weightValue = "",
				weightOptions = "",
				currentWeightTitle = variantSelect.data("inherit"),
				weightMap = inspiroCustomControl.font_weight;

			var variantArray = variantSavedField.val().split(",");

			// Hide font variant for any ohter fonts then Google
			var selectedOptionGroup =
				fontSelect
					.find('option[value="' + fontSelect.val() + '"]')
					.closest("optgroup")
					.attr("label") || "";
			if ("Google" == selectedOptionGroup) {
				variantSelect.parent().removeClass("inspiro-hide");
			} else {
				variantSelect.parent().addClass("inspiro-hide");
			}

			var fontValue = InspiroTypography._cleanGoogleFonts(fontValue);
			var weightObject = InspiroTypography._getWeightObject(fontValue);

			weightMap["inherit"] = currentWeightTitle;

			for (var i = 0; i < weightObject.length; i++) {
				for (var e = 0; e < variantArray.length; e++) {
					if (weightObject[i] === variantArray[e]) {
						weightValue = weightObject[i];
						selected = ' selected="selected"';
					} else {
						selected =
							weightObject[i] == weightValue
								? ' selected="selected"'
								: "";
					}
				}
				weightOptions +=
					'<option value="' +
					weightObject[i] +
					'"' +
					selected +
					">" +
					weightMap[weightObject[i]] +
					"</option>";
			}

			variantSelect.html(weightOptions);
			if (!init) {
				api(variants).set("");
			}
		},
	};

	$(function () {
		InspiroTypography.init();
	});
})(jQuery);
