<?php
/*
 * The index file is extracted for
 * better code modularity, providing
 * an easier approach for translations.
 */


$lang_dir = basename(dirname($_SERVER['SCRIPT_FILENAME']));

$about_us;
$company_details;
$map_info;

switch ($lang_dir) {
    case "en":
      $about_us = "About us";
      $company_details =
        "
          Our company is freshly new to the market! We're glad to help with providing you our computer hardware products!<br>
          <u>Some of our partners are</u>
        ";
      $map_info = "Here's our physical store location!";
        break;
    case "bg":
      $about_us = "За нас";
      $company_details =
        "
        <p>
          Нашата компания е чисто нова на пазара! Гордеем се да ви предоставяме нашите хардуерни продукти!<br>
          <u>Някои от нашите партньори са</u>
        </p>";
      $map_info = "Ето нашата физическа локация!";
        break;
    default:
        # code...
        break;
}

echo
"<div class=\"mainContent\">
    <h1>$about_us</h1>

    <p>$company_details</p>

    <div class=\"listedCompanies\">
        <img src=\"../images/partners/gigabyte.png\" alt=\"gigabyte.png\">
        <img src=\"../images/partners/msi.png\" alt=\"msi.png\">
        <img src=\"../images/partners/corsair.png\" alt=\"corsair.png\">
        <img src=\"../images/partners/hyperx.png\" alt=\"hyperx.png\">
    </div>

    <p>$map_info</p>

    <div class=\"mapContainer\">
        <!-- GeneratEd with: https://embedmap.org/ -->
        <iframe
            width=\"250\"
            height=\"250\"
            frameborder=\"0\"
            scrolling=\"no\" 
            marginheight=\"0\"
            marginwidth=\"0\"
            id=\"gmap_canvas\"
            src=\"https://maps.google.com/maps?width=250&amp;height=250&amp;hl=en&amp;q=%22Akademik%20Boris%20Stefanov%22%2035%20Sofia+(Ozone)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed\">
        </iframe>
        <a href='https://www.krankenversicherungsvergleich.at/'>.</a>
        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=dc8757f1c046d9350427c71c566e5c740fa43957'></script>
    </div>
</div>
";
?>
