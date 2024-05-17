jQuery(document).ready(function ($) {
  function toggleTaxonomies() {
    var taxonomyOneSelected =
      $('#inspector-checkbox-control-3 input[type="checkbox"]:checked').length >
      0;
    var taxonomyTwoSelected =
      $('#inspector-checkbox-control-4 input[type="checkbox"]:checked').length >
      0;

    if (taxonomyOneSelected) {
      $("#inspector-checkbox-control-4")
        .find('input[type="checkbox"]')
        .prop("disabled", true);
    } else {
      $("#inspector-checkbox-control-4")
        .find('input[type="checkbox"]')
        .prop("disabled", false);
    }

    if (taxonomyTwoSelected) {
      $("#inspector-checkbox-control-3")
        .find('input[type="checkbox"]')
        .prop("disabled", true);
    } else {
      $("#inspector-checkbox-control-3")
        .find('input[type="checkbox"]')
        .prop("disabled", false);
    }
  }

  $('#inspector-checkbox-control-3 input[type="checkbox"]').change(
    toggleTaxonomies
  );
  $('#inspector-checkbox-control-4 input[type="checkbox"]').change(
    toggleTaxonomies
  );

  toggleTaxonomies(); // Initial call to set the proper state
});
