function transformCampaignName() {
  var campaignNameInput = document.getElementById("campaign-name");
  var campaignName = campaignNameInput.value;

  // Step 1: Capitalize the first letter after space
  var capitalizedAfterSpace = campaignName.replace(
    /(?:^|\s)(\w)/g,
    function (_, letter) {
      return letter.toUpperCase();
    }
  );

  // Step 2: Capitalize the first letter after hyphen
  var capitalizedAfterHyphen = capitalizedAfterSpace.replace(
    /(?:^|-)(\w)/g,
    function (_, letter) {
      return letter.toUpperCase();
    }
  );

  // Step 3: Remove hyphens
  var withoutHyphens = capitalizedAfterHyphen.replace(/-/g, "");

  // Step 4: Remove spaces
  var withoutSpaces = withoutHyphens.replace(/\s/g, "");

  campaignNameInput.value = withoutSpaces;
}

function pasteText() {
  navigator.clipboard.readText().then(function (text) {
    var campaignNameInput = document.getElementById("campaign-name");
    campaignNameInput.value = text;
    transformCampaignName();
  });
}

function handleSegmentNameInput() {
  const segmentNameText = document.getElementById("segment-name-text");
  const segmentNameDropdown = document.getElementById("segment-name-dropdown");
  const searchInput = document.getElementById("segment-search-input");

  // Hide the dropdown and show the text field if it's focused
  if (segmentNameText === document.activeElement) {
    segmentNameDropdown.style.display = "none";
    segmentNameText.style.display = "inline-block";
    searchInput.style.display = "none";
  } else {
    segmentNameText.style.display = "none";
    segmentNameDropdown.style.display = "inline-block";
    searchInput.style.display = "inline-block";
  }
}

function addCustomSegmentOption() {
  const segmentNameText = document.getElementById("segment-name-text");
  const segmentNameDropdown = document.getElementById("segment-name-dropdown");
  const searchInput = document.getElementById("segment-search-input");

  // Add the custom option to the dropdown
  if (segmentNameText.value.length > 0) {
    const option = document.createElement("option");
    option.value = segmentNameText.value;
    option.text = segmentNameText.value;
    segmentNameDropdown.add(option);
    segmentNameDropdown.value = segmentNameText.value;
  }

  segmentNameText.style.display = "none";
  segmentNameDropdown.style.display = "inline-block";
  searchInput.style.display = "inline-block";
  searchInput.value = ""; // Clear the search input
}

function filterDropdownOptions(dropdownId, searchInputId) {
  const dropdown = document.getElementById(dropdownId);
  const searchInput = document.getElementById(searchInputId);
  const filter = searchInput.value.toLowerCase();
  const options = dropdown.getElementsByTagName("option");

  for (let i = 0; i < options.length; i++) {
    const option = options[i];
    const text = option.text.toLowerCase();
    option.style.display = text.includes(filter) ? "" : "none";
  }
}

function createOutput() {
  const campaignName = document.getElementById("campaign-name").value.trim();

  // Validate if Campaign Name is blank
  if (campaignName === "") {
    alert("Campaign Name can't be blank");
    return;
  }

  // Rest of the code to generate outputs
  const businessUnit = document.getElementById("business-unit").value;
  const franchise = document.getElementById("franchise").value;
  const brand = document.getElementById("brand").value;
  const comMed = document.getElementById("com-med").value;
  const campaignType = document.getElementById("campaign-type").value;
  const deliveryType = document.getElementById("delivery-type").value;
  const contentType = document.getElementById("content-type").value;
  const channel = document.getElementById("channel").value;
  const segmentName = document.getElementById("segment-name-dropdown").value;

  // Generate the outputs
  const activityNameOutput = [
    businessUnit,
    franchise,
    brand,
    comMed,
    campaignName,
    campaignType,
    deliveryType,
    contentType,
    channel,
    segmentName,
  ]
    .filter(Boolean)
    .join("_");
  const journeyNameOutput = [
    businessUnit,
    franchise,
    brand,
    comMed,
    campaignName,
    campaignType,
  ]
    .filter(Boolean)
    .slice(0, 5)
    .join("_");

  // Update the output elements
  document.getElementById("activity-name-output").textContent =
    activityNameOutput;
  document.getElementById("journey-name-output").textContent =
    journeyNameOutput;
}

function copyOutput(outputId) {
  const outputElement = document.getElementById(outputId);
  const tempInput = document.createElement("input");
  tempInput.value = outputElement.textContent;
  document.body.appendChild(tempInput);
  tempInput.select();
  document.execCommand("copy");
  document.body.removeChild(tempInput);
}
