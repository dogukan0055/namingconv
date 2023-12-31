<?php
if(isset($_GET["status"])){

    if($_GET["status"] == "success"){

        echo '<div style="background-color: green; color:white; width: 100%; height:100px;">Başarıyla kaydedildi.</div>';

    }else{

        echo '<div style="background-color: red; color:white; width: 100%; height:100px;">Kaydedilemedi</div>';




    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Naming Convention - MDP for Pyksys</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/styles.css">
    <script src="/javascript.js"></script>

</head>

<body>
    <form action="/submit.php" method="post" netlify>
        <div class="container">
            <h1 class="heading">MDP for Pyksys</h1>
            <div class="form-section">
                <div class="form-group">
                    <label for="business-unit">Business Unit:</label>
                    <select id="business-unit" name="business_unit">
                        <option value="SPC">SPC</option>
                        <option value="FDT">FDT</option>
                        <option value="CHC">CHC</option>
                        <option value="GMD">GMD</option>
                        <option value="VAC">VAC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="franchise">Franchise:</label>
                    <select id="franchise" name="franchise">
                        <option value="RD">RD</option>
                        <option value="DUP">DUP</option>
                        <option value="MS">MS</option>
                        <option value="ONCO">ONCO</option>
                        <option value="RBD">RBD</option>
                        <option value="DYS">DYS</option>
                        <option value="TH">TH</option>
                        <option value="DIA">DIA</option>
                        <option value="DH">DH</option>
                        <option value="NUT">NUT</option>
                        <option value="CCA">CCA</option>
                        <option value="FDT">FDT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="com-med">Commercial | Medical:</label>
                    <select id="com-med" name="com_med">
                        <option value="COM">COM</option>
                        <option value="MED">MED</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="brand">Brand:</label>
                    <select id="brand" name="brand">
                        <option value="Aldurazyme">Aldurazyme</option>
                        <option value="Amaryl">Amaryl</option>
                        <option value="APIDRA">APIDRA</option>
                        <option value="Aprovasc">Aprovasc</option>
                        <option value="Aprovel">Aprovel</option>
                        <option value="ASMD">ASMD</option>
                        <option value="Aubagio">Aubagio</option>
                        <option value="Cablivi">Cablivi</option>
                        <option value="Cerezyme">Cerezyme</option>
                        <option value="Clexane">Clexane</option>
                        <option value="Copiktra">Copiktra</option>
                        <option value="Diabetes">Diabetes</option>
                        <option value="DupixentAD">DupixentAD</option>
                        <option value="DupixentAS">DupixentAS</option>
                        <option value="DupixentEoE">DupixentEoE</option>
                        <option value="DupixentNP">DupixentNP</option>
                        <option value="DupixentPN">DupixentPN</option>
                        <option value="Fabrazyme">Fabrazyme</option>
                        <option value="Hexaxim">Hexaxim</option>
                        <option value="Influenza">Influenza</option>
                        <option value="Lantus">Lantus</option>
                        <option value="Lemtrada">Lemtrada</option>
                        <option value="MDC">MDC</option>
                        <option value="Menactra">Menactra</option>
                        <option value="Myozyme">Myozyme</option>
                        <option value="Plavix">Plavix</option>
                        <option value="Praluent">Praluent</option>
                        <option value="Sarclisa">Sarclisa</option>
                        <option value="Soliqua">Soliqua</option>
                        <option value="Toujeo">Toujeo</option>
                        <option value="Zympass">Zympass</option>
                        <option value="Buscopan">Buscopan</option>
                        <option value="Dulcolax">Dulcolax</option>
                        <option value="Enterogermina">Enterogermina</option>
                        <option value="Mucosolvan">Mucosolvan</option>
                        <option value="Nasacort">Nasacort</option>
                        <option value="Naselfast">Naselfast</option>
                        <option value="Pharmaton">Pharmaton</option>
                        <option value="Telfast">Telfast</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="campaign-name">Campaign Name:</label>
                    <input id="campaign-name" type="text" name="campaign_name" required
                        oninput="transformCampaignName()">
                    <div class="paste-button" onclick="pasteText()">
                        <i class="fas fa-paste"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label for="campaign-type">Campaign Type:</label>
                    <select id="campaign-type" name="campaign_type">
                        <option value="WB">WB</option>
                        <option value="NL">NL</option>
                        <option value="OT">OT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="delivery-type">Delivery Type:</label>
                    <select id="delivery-type" name="delivery_type">
                        <option value="INV">INV</option>
                        <option value="RM">RM</option>
                        <option value="STD">STD</option>
                        <option value="PE">PE</option>
                        <option value="OT">OT</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="content-type">Content Type:</label>
                    <select id="content-type" name="content_type">
                        <option value="BR">BR</option>
                        <option value="UN">UN</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="channel">Channel:</label>
                    <select id="channel" name="channel">
                        <option value="EMAIL">EMAIL</option>
                        <option value="SMS">SMS</option>
                        <option value="WA">WA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="segment-name-dropdown">Segment Name:</label>
                    <select id="segment-name-dropdown" name="segment_name" onchange="handleSegmentNameInput()">
                        <option value="RU">RU</option>
                        <option value="POA">POA</option>
                        <option value="GTM3">GTM3</option>
                        <option value="SA">SA</option>
                        <option value="AE">AE</option>
                        <option value="BH">BH</option>
                        <option value="KW">KW</option>
                        <option value="QA">QA</option>
                        <option value="OM">OM</option>
                    </select>
                    <input style="margin-top:5px;" id="segment-name-text" type="text"
                        placeholder="Enter custom segment name" onblur="addCustomSegmentOption()"
                        onfocus="handleSegmentNameInput()">
                </div>

                <button type="button" class="create-button" onclick="createOutput()">Create</button>
                <input type="submit" value="Submit" class="submit-button">
            </div>
            <div class="output-section">
                <div class="output-group">
                    <div class="output-item">
                        <label for="activity-name-output">Activity Name:</label>
                        <div id="activity-name-output" class="output-text"></div>
                        <div class="copy-button" onclick="copyOutput('activity-name-output')">
                            <i class="far fa-copy"></i>
                        </div>
                    </div>
                </div>

                <div class="output-group">
                    <div class="output-item">
                        <label for="journey-name-output">Journey Name:</label>
                        <div id="journey-name-output" class="output-text"></div>
                        <div class="copy-button" onclick="copyOutput('journey-name-output')">
                            <i class="far fa-copy"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
</div>
</body>

</html>