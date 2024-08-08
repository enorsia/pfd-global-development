<!--- Video Section -->
<div id="video">
    <div class="container-fluid px-0 position-relative section-btm hero-banner-section" style="margin-top: 0px">
        <div class="col-12 px-0">
            <div class="position-relative">

                @if (Str::isMobile())
                    <div style="position: relative; padding-top: 139%" class="" id="mobile_video">
                        <iframe title="for Mobile video" class="mobile_frame"
                            src="https://customer-uzdzcdmu6hv0jfmr.cloudflarestream.com/c24f320857786d50bbba4e8ad57c3cc7/iframe?muted=true&preload=true&loop=true&autoplay=true&poster=https%3A%2F%2Fcustomer-uzdzcdmu6hv0jfmr.cloudflarestream.com%2Fc24f320857786d50bbba4e8ad57c3cc7%2Fthumbnails%2Fthumbnail.jpg%3Ftime%3D%26height%3D600&controls=false"
                            loading="lazy"
                            style="
                            border: none;
                            position: absolute;
                            top: 0;
                            left: 0;
                            height: 100%;
                            width: 100%;
                            "
                            allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                            allowfullscreen="true"></iframe>
                    </div>
                @else
                    <div style="position: relative; padding-top: 33.49% !important" class=""
                        id="large_video">
                        <iframe title="for desktop video"
                            src="https://customer-uzdzcdmu6hv0jfmr.cloudflarestream.com/9d4f54f72e6c48a6c0d3186c9cc92d59/iframe?muted=true&preload=true&loop=true&autoplay=true&poster=https%3A%2F%2Fcustomer-uzdzcdmu6hv0jfmr.cloudflarestream.com%2F9d4f54f72e6c48a6c0d3186c9cc92d59%2Fthumbnails%2Fthumbnail.jpg%3Ftime%3D%26height%3D600&controls=false"
                            loading="lazy"
                            style="
                            border: none;
                            position: absolute;
                            top: 0;
                            left: 0;
                            height: 100%;
                            width: 100%;
                            "
                            allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                            allowfullscreen="true"></iframe>
                    </div>
                @endif


            </div>
        </div>
    </div>
</div>
<!--- End Video Section -->
