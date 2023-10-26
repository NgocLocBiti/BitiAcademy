<section class="gioithieu-banner">
    <!-- <img src="https://s3-alpha-sig.figma.com/img/58f2/fa61/11d0837bc993d44bb87d3fcd6e584c05?Expires=1697414400&Signature=qR9-tjYy8X3Lt~wCKytAn6PuGGs6pxl3jHHjhmMX1hik-Gs1YYZvtJR9Acjv~ZUzYTuWBG2Lcth6ZiB3h4MZRw2bvHRFURFAzyvHlwwnNlrqd9ii~rDwRPOVCsqoVwGf50-kZ4yLtOz2Plt3WEtFMmou7t-4gnKhggd812zUbQpliHtkPdfxH6~L~X4V9UJMpslFIV0ASPa-4kH9YMuq~kQSNIB3C2XbnN0u6MAnukVzpcMFMGeEcqNADScHESBIc9EPga7MkNjs6Y5CiNC3bs7FaVaDTrKyiPntoMRTKZ4yzizvJBaHcWF8nX-CL2sKKnW89mMSLmmrzHhHQwZjUw__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4" alt=""> -->
    <?php
    $image = get_field('img');
    if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="" />
    <?php endif; ?>
</section>
<script>
    var elements = document.querySelectorAll('.active');
    elements.forEach(function(element) {
        element.classList.remove('active');
    });
    document.getElementById("about").classList.add('active');
</script>