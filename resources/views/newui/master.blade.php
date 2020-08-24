<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <title>گیم نت</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/css/animate.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('newui/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('newui/css/jquery.typeahead.min.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @yield('header')
</head>

<body>
    <div class="total-content">


        <header>
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase text-white fixed-top d-flex justify-content-between" id="mainNav">
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold  text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
                </button>
                <div class="mobile-header-btns ">
                    <div class="d-flex">

                      <button type="button" class="btn btn-outline-primary provinces-header-btn ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 47.086 58.2">
                                    <g id="place" transform="translate(-48.886)">
                                      <g id="Group_300" data-name="Group 300" transform="translate(48.886)">
                                        <g id="Group_299" data-name="Group 299">
                                          <path id="Path_1667" data-name="Path 1667" d="M91.748,10.119a23.5,23.5,0,0,0-38.636,0,23.5,23.5,0,0,0-2.736,21.654,18.509,18.509,0,0,0,3.411,5.632L70.88,57.484a2.033,2.033,0,0,0,3.1,0L91.068,37.411a18.527,18.527,0,0,0,3.411-5.625A23.507,23.507,0,0,0,91.748,10.119Zm-1.08,20.242a14.516,14.516,0,0,1-2.684,4.4l-.01.011L72.43,53.026,56.876,34.757a14.525,14.525,0,0,1-2.689-4.41,19.441,19.441,0,0,1,2.272-17.914,19.429,19.429,0,0,1,31.94,0A19.444,19.444,0,0,1,90.668,30.361Z" transform="translate(-48.886 0)" fill="#e80766"/>
                                        </g>
                                      </g>
                                      <g id="Group_302" data-name="Group 302" transform="translate(61.034 12.074)">
                                        <g id="Group_301" data-name="Group 301">
                                          <path id="Path_1668" data-name="Path 1668" d="M167.15,106.219a11.4,11.4,0,1,0,11.4,11.4A11.409,11.409,0,0,0,167.15,106.219Zm0,18.722a7.326,7.326,0,1,1,7.326-7.326A7.334,7.334,0,0,1,167.15,124.941Z" transform="translate(-155.754 -106.219)" fill="#e80766"/>
                                        </g>
                                      </g>
                                    </g>
                            </svg>
                          </span>
                      استان ها
                      <span class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30.542 18.962">
                          <g id="up-arrow" transform="translate(171.833 194.442) rotate(179)">
                            <g id="Group_269" data-name="Group 269" transform="translate(138.197 178.446)">
                              <g id="Group_268" data-name="Group 268">
                                <path id="Path_1506" data-name="Path 1506" d="M167.686,192.4,155.03,179.214a2.458,2.458,0,0,0-3.569,0L138.807,192.4a2.719,2.719,0,0,0,0,3.431,2.463,2.463,0,0,0,3.569.287L153.233,184.8l10.883,11.312a2.458,2.458,0,0,0,3.569,0A2.714,2.714,0,0,0,167.686,192.4Z" transform="translate(-138.197 -178.446)" fill="#e80766"/>
                              </g>
                            </g>
                          </g>
                        </svg>
                        
                      </span>
                    </button>

                        <button type="button" class="btn btn-primary login-header-btn">ثبت نام / ورود</button>
                    </div>

                </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-right ml-auto ">
                        <li class="nav-item mx-0 mx-lg-1 text-white"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger text-white" href="{{ route('home') }}">صفحه اصلی</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  text-white" href="{{ route('gamenets') }}">گیم نت ها</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3  text-white" href="{{ route('intro') }}">معرفی</a></li>
                        <!-- <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-md-3  text-white" href="#">درباره ما</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-md-3  text-white" href="#">تماس با ما</a></li> -->
                    </ul>
                </div>
                <div class="header-btns">
                    <div class="d-flex dropdown" id="provinces-dropdown">
                        <!-- <a href="#" id="mytooltip" rel="tooltip" data-toggle="tooltip" data-placement="bottom" data-html="true">Hover</a> -->
                        <button type="button" class="btn btn-outline-primary provinces-header-btn ml-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 47.086 58.2">
                                    <g id="place" transform="translate(-48.886)">
                                      <g id="Group_300" data-name="Group 300" transform="translate(48.886)">
                                        <g id="Group_299" data-name="Group 299">
                                          <path id="Path_1667" data-name="Path 1667" d="M91.748,10.119a23.5,23.5,0,0,0-38.636,0,23.5,23.5,0,0,0-2.736,21.654,18.509,18.509,0,0,0,3.411,5.632L70.88,57.484a2.033,2.033,0,0,0,3.1,0L91.068,37.411a18.527,18.527,0,0,0,3.411-5.625A23.507,23.507,0,0,0,91.748,10.119Zm-1.08,20.242a14.516,14.516,0,0,1-2.684,4.4l-.01.011L72.43,53.026,56.876,34.757a14.525,14.525,0,0,1-2.689-4.41,19.441,19.441,0,0,1,2.272-17.914,19.429,19.429,0,0,1,31.94,0A19.444,19.444,0,0,1,90.668,30.361Z" transform="translate(-48.886 0)" fill="#e80766"/>
                                        </g>
                                      </g>
                                      <g id="Group_302" data-name="Group 302" transform="translate(61.034 12.074)">
                                        <g id="Group_301" data-name="Group 301">
                                          <path id="Path_1668" data-name="Path 1668" d="M167.15,106.219a11.4,11.4,0,1,0,11.4,11.4A11.409,11.409,0,0,0,167.15,106.219Zm0,18.722a7.326,7.326,0,1,1,7.326-7.326A7.334,7.334,0,0,1,167.15,124.941Z" transform="translate(-155.754 -106.219)" fill="#e80766"/>
                                        </g>
                                      </g>
                                    </g>
                            </svg>
                          </span>
                      استان ها
                      <span class="mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 30.542 18.962">
                          <g id="up-arrow" transform="translate(171.833 194.442) rotate(179)">
                            <g id="Group_269" data-name="Group 269" transform="translate(138.197 178.446)">
                              <g id="Group_268" data-name="Group 268">
                                <path id="Path_1506" data-name="Path 1506" d="M167.686,192.4,155.03,179.214a2.458,2.458,0,0,0-3.569,0L138.807,192.4a2.719,2.719,0,0,0,0,3.431,2.463,2.463,0,0,0,3.569.287L153.233,184.8l10.883,11.312a2.458,2.458,0,0,0,3.569,0A2.714,2.714,0,0,0,167.686,192.4Z" transform="translate(-138.197 -178.446)" fill="#e80766"/>
                              </g>
                            </g>
                          </g>
                        </svg>
                        
                      </span>
                    </button>
                    <div class="dropdown-menu  Provinces">
                            
                    </div>




                        <a href="{{ route('register') }}"><button type="button" class="btn btn-primary login-header-btn">ثبت نام / ورود</button></a>
                    </div>
                </div>

            </nav>
        </header>
        @yield('content')
        <footer class="footer  text-center">
            <div class="row w-100 m-0 top-footer ">
                <div class="col-12 mx-auto p-0 inner-top-footer">
                    @yield('footersvg')
                </div>
            </div>

            <div class="row  w-100 p-0 m-0  justify-content-center align-items-center ">
                <div class="col-md-6 pb-0 ">
                    <div class="row  w-100 p-0 m-0 justify-content-center align-items-center">
                        <div class="col-md-12">
                            <span class="footer-location-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                              <g id="place" transform="translate(-21.886 23)">
                                <g id="Ellipse_75" data-name="Ellipse 75" transform="translate(21.886 -23)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                  <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                  <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                </g>
                                <g id="Group_300" data-name="Group 300" transform="translate(48.886)">
                                  <g id="Group_299" data-name="Group 299">
                                    <path id="Path_1667" data-name="Path 1667" d="M87.017,9A20.905,20.905,0,0,0,52.645,9a20.909,20.909,0,0,0-2.434,19.264,16.466,16.466,0,0,0,3.035,5.01L68.453,51.139a1.809,1.809,0,0,0,2.756,0l15.2-17.857a16.483,16.483,0,0,0,3.034-5A20.913,20.913,0,0,0,87.017,9ZM86.056,27.01a12.914,12.914,0,0,1-2.388,3.912l-.008.01L69.831,47.174,55.994,30.921A12.922,12.922,0,0,1,53.6,27a17.3,17.3,0,0,1,2.022-15.937,17.285,17.285,0,0,1,28.415,0A17.3,17.3,0,0,1,86.056,27.01Z" transform="translate(-48.886 0)" fill="#e80766"/>
                                  </g>
                                </g>
                                <g id="Group_302" data-name="Group 302" transform="translate(59.693 10.741)">
                                  <g id="Group_301" data-name="Group 301">
                                    <path id="Path_1668" data-name="Path 1668" d="M165.892,106.219a10.138,10.138,0,1,0,10.138,10.138A10.15,10.15,0,0,0,165.892,106.219Zm0,16.655a6.517,6.517,0,1,1,6.517-6.517A6.525,6.525,0,0,1,165.892,122.874Z" transform="translate(-155.754 -106.219)" fill="#e80766"/>
                                  </g>
                                </g>
                              </g>
                            </svg>
                        </span>

                            <p class="text-white">
                                به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود.
                            </p>
                        </div>
                        <div class="col-6 footer-call pr-0">
                            <span class="footer-call-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                                  <g id="phone" transform="translate(32 34.888)">
                                    <g id="Ellipse_76" data-name="Ellipse 76" transform="translate(-32 -34.888)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                      <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                      <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                    </g>
                                    <path id="Path_1672" data-name="Path 1672" d="M37.293,51.889A14.456,14.456,0,0,1,32.333,51a52.888,52.888,0,0,1-19.2-12.241A52.884,52.884,0,0,1,.887,19.556,14.352,14.352,0,0,1,.154,12.5,14.718,14.718,0,0,1,7.718,1.728,14.449,14.449,0,0,1,14.636,0a1.622,1.622,0,0,1,1.585,1.282l2.545,11.877a1.622,1.622,0,0,1-.439,1.486l-4.349,4.349A42.681,42.681,0,0,0,32.9,37.91l4.349-4.349a1.622,1.622,0,0,1,1.486-.439l11.877,2.545a1.621,1.621,0,0,1,1.282,1.585,14.448,14.448,0,0,1-1.728,6.918,14.718,14.718,0,0,1-10.773,7.564,14.423,14.423,0,0,1-2.095.154ZM13.341,3.314A11.362,11.362,0,0,0,3.935,18.449,49.181,49.181,0,0,0,33.44,47.955a11.362,11.362,0,0,0,15.135-9.406l-9.662-2.07L34.372,41.02a1.621,1.621,0,0,1-1.836.321A45.913,45.913,0,0,1,10.548,19.353a1.621,1.621,0,0,1,.321-1.836l4.542-4.542Z" transform="translate(-8 -12)" fill="#e80766"/>
                                  </g>
                                </svg>
                          </span>

                            <span class="text-white mr-2">
                          09128999999
                          </span>

                        </div>
                        <div class="col-6 d-flex  text-right p-0 align-items-center">

                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 95 95">
                              <g id="email_2_" data-name="email (2)" transform="translate(17.4 -50.466)">
                                <g id="Ellipse_77" data-name="Ellipse 77" transform="translate(-17.4 50.466)" fill="#3b227d" stroke="#e80766" stroke-width="3">
                                  <circle cx="47.5" cy="47.5" r="47.5" stroke="none"/>
                                  <circle cx="47.5" cy="47.5" r="46" fill="none"/>
                                </g>
                                <g id="Group_309" data-name="Group 309" transform="translate(7.327 88.636)">
                                  <g id="Group_308" data-name="Group 308" transform="translate(0 0)">
                                    <path id="Path_1674" data-name="Path 1674" d="M118.783,165.926l-10-9.433,8.883-4.066a1.31,1.31,0,0,0,.675-1.98,2.067,2.067,0,0,0-2.468-.542l-18.4,8.422-18.4-8.422a2.067,2.067,0,0,0-2.468.542,1.31,1.31,0,0,0,.675,1.98l8.883,4.066-10,9.433a1.263,1.263,0,0,0,.206,2.046,2.131,2.131,0,0,0,2.55-.165l10.443-9.85,7.218,3.3a2.2,2.2,0,0,0,1.793,0l7.218-3.3,10.443,9.85a2.131,2.131,0,0,0,2.55.165A1.263,1.263,0,0,0,118.783,165.926Z" transform="translate(-75.726 -149.716)" fill="#e80766"/>
                                  </g>
                                </g>
                                <g id="Group_311" data-name="Group 311" transform="translate(0 81)">
                                  <g id="Group_310" data-name="Group 310" transform="translate(0 0)">
                                    <path id="Path_1675" data-name="Path 1675" d="M53.033,81H5.11A4.9,4.9,0,0,0,0,85.646v26.842a4.9,4.9,0,0,0,5.11,4.646H53.033a4.9,4.9,0,0,0,5.11-4.646V85.646A4.9,4.9,0,0,0,53.033,81Zm1.7,31.487a1.633,1.633,0,0,1-1.7,1.549H5.11a1.633,1.633,0,0,1-1.7-1.549V85.646A1.633,1.633,0,0,1,5.11,84.1H53.033a1.633,1.633,0,0,1,1.7,1.549Z" transform="translate(0 -81)" fill="#e80766"/>
                                  </g>
                                </g>
                              </g>
                            </svg>
                            <span class="text-white mr-2">
                              example@gmail.com
                          </span>


                        </div>
                        <div class="col-md-12 mt-4">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                              <g id="google-plus-circular-button" opacity="0.8">
                                <g id="Group_11" data-name="Group 11">
                                  <path id="Path_64" data-name="Path 64" d="M23.173,27.438c0-2.914-1.688-4.351-3.546-5.914l-1.52-1.183a2.311,2.311,0,0,1-1.1-1.815,2.97,2.97,0,0,1,1.183-2.069c1.772-1.394,3.546-2.871,3.546-6a7.119,7.119,0,0,0-3-5.7h2.617l2.7-1.52h-8.7A11.512,11.512,0,0,0,7.8,5.562,7.591,7.591,0,0,0,5.1,11.22a6.677,6.677,0,0,0,7.008,6.63c.424,0,.886-.043,1.353-.084a3.792,3.792,0,0,0-.421,1.647,4.432,4.432,0,0,0,1.267,2.871c-1.9.127-5.447.338-8.064,1.942a6.079,6.079,0,0,0-3.252,5.153c0,3.125,2.957,6.039,9.08,6.039C19.33,35.418,23.173,31.4,23.173,27.438ZM14.094,16.67c-3.632,0-5.28-4.688-5.28-7.516A4.872,4.872,0,0,1,9.743,6.03a3.948,3.948,0,0,1,2.957-1.4c3.505,0,5.32,4.732,5.32,7.77a4.265,4.265,0,0,1-1.056,3.084A4.332,4.332,0,0,1,14.094,16.67Zm.043,16.973c-4.518,0-7.432-2.152-7.432-5.15s2.7-4.011,3.632-4.348a16.928,16.928,0,0,1,4.434-.678,6.679,6.679,0,0,1,.97.043c3.211,2.279,4.6,3.419,4.6,5.574C20.343,31.7,18.19,33.644,14.137,33.644Z" transform="translate(10.723 11.614)" fill="#fff"/>
                                  <path id="Path_65" data-name="Path 65" d="M7.476,12.088h4.572v4.569h2.285V12.088H18.9V9.8h-4.57V5.234H12.049V9.8H7.476Z" transform="translate(26.8 18.761)" fill="#fff"/>
                                  <path id="Path_66" data-name="Path 66" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" fill="#fff"/>
                                </g>
                              </g>
                            </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                              <g id="pinterest-social-visual-website-logotype" opacity="0.8">
                                <g id="Group_10" data-name="Group 10" transform="translate(0 0)">
                                  <path id="Path_62" data-name="Path 62" d="M30.909,14.641c0-6.16-5.112-11.9-12.879-11.9-9.668,0-14.54,7.076-14.54,12.977,0,3.573,1.323,6.752,4.167,7.934a.7.7,0,0,0,1.018-.519c.092-.365.316-1.285.413-1.666A1.022,1.022,0,0,0,8.8,20.309a6.073,6.073,0,0,1-1.342-4.075A9.735,9.735,0,0,1,17.471,6.287c5.463,0,8.467,3.408,8.467,7.959,0,5.99-2.6,11.043-6.452,11.043a3.194,3.194,0,0,1-3.211-4c.61-2.63,1.8-5.472,1.8-7.37,0-1.7-.894-3.119-2.744-3.119-2.177,0-3.924,2.3-3.924,5.377a8.107,8.107,0,0,0,.651,3.287S9.825,29.1,9.436,30.782a18.528,18.528,0,0,0-.359,4.651c.149,1.28,1.388,2.323,2.463.918A17.412,17.412,0,0,0,13.531,32c.251-.924,1.431-5.709,1.431-5.709a5.8,5.8,0,0,0,4.972,2.59C26.472,28.876,30.909,22.788,30.909,14.641Z" transform="translate(12.509 9.827)" fill="#fff"/>
                                  <path id="Path_63" data-name="Path 63" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" transform="translate(0 0)" fill="#fff"/>
                                </g>
                              </g>
                            </svg></a>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 59.414 59.414">
                                  <g id="twitter-circular-button" opacity="0.8">
                                    <g id="Group_9" data-name="Group 9">
                                      <path id="Path_60" data-name="Path 60" d="M31.724,11.295c0-.3-.005-.6-.019-.891a13.494,13.494,0,0,0,3.276-3.522,12.577,12.577,0,0,1-3.77,1.032A6.737,6.737,0,0,0,34.1,4.143,12.606,12.606,0,0,1,29.93,5.75a6.53,6.53,0,0,0-4.791-2.26,6.632,6.632,0,0,0-6.563,6.841,7.294,7.294,0,0,0,.17,1.585A18.482,18.482,0,0,1,5.217,4.44a7.268,7.268,0,0,0-.888,3.511,7.229,7.229,0,0,0,2.919,5.866,6.282,6.282,0,0,1-2.973-.91V13A6.972,6.972,0,0,0,9.54,19.9a6.216,6.216,0,0,1-1.728.235A6,6,0,0,1,6.578,20a6.671,6.671,0,0,0,6.13,4.885,12.668,12.668,0,0,1-8.151,2.968,12.5,12.5,0,0,1-1.566-.1,17.707,17.707,0,0,0,10.063,3.154C25.123,30.915,31.724,20.409,31.724,11.295Z" transform="translate(10.722 12.506)" fill="#fff"/>
                                      <path id="Path_61" data-name="Path 61" d="M59.414,29.707A29.707,29.707,0,1,0,29.707,59.414,29.707,29.707,0,0,0,59.414,29.707Zm-56.713,0A27.006,27.006,0,1,1,29.707,56.713,27.006,27.006,0,0,1,2.7,29.707Z" fill="#fff"/>
                                    </g>
                                  </g>
                                </svg>
                            </a>

                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" id="facebook-logo-in-circular-button-outlined-social-symbol" width="40" height="40" viewBox="0 0 63.631 63.631">
                              <g id="Group_8" data-name="Group 8">
                                <path id="Path_58" data-name="Path 58" d="M63.631,31.815A31.815,31.815,0,1,0,31.815,63.631,31.816,31.816,0,0,0,63.631,31.815Zm-60.738,0A28.923,28.923,0,1,1,31.815,60.738,28.922,28.922,0,0,1,2.892,31.815Z" fill="#fff"/>
                                <path id="Path_59" data-name="Path 59" d="M14.5,39.427V21.064h6.059l.957-6.085H14.5V11.927c0-1.588.521-3.1,2.8-3.1h4.555V2.75H15.392c-5.438,0-6.921,3.581-6.921,8.544v3.682H4.74v6.088H8.471V39.427Z" transform="translate(18.532 10.752)" fill="#fff"/>
                              </g>
                            </svg></a>
                        </div>
                        <div class="col-6 text-left">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130" height="130" viewBox="0 0 239 233">
                                <defs>
                                  <filter id="Rectangle_119" x="0" y="0" width="239" height="233" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="15" result="blur"/>
                                    <feFlood flood-opacity="0.11"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                  </filter>
                                  <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 275 275">
                                    <image width="275" height="275" xlink:href="data:image/png;base64,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"/>
                                  </pattern>
                                </defs>
                                <g id="Group_313" data-name="Group 313" transform="translate(-867 -11352)">
                                  <g transform="matrix(1, 0, 0, 1, 867, 11352)" filter="url(#Rectangle_119)">
                                    <rect id="Rectangle_119-2" data-name="Rectangle 119" width="149" height="143" rx="71.5" transform="translate(45 42)" fill="#dfd7f7"/>
                                  </g>
                                  <rect id="enamad_icon_text_color_blue_275" width="128" height="128" rx="33" transform="translate(923 11406)" fill="url(#pattern)"/>
                                </g>
                              </svg>
                            </a>
                        </div>
                        <div class="col-6 p-0 text-right">
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="130" height="130" viewBox="0 0 239 233">
                                <defs>
                                  <filter id="Rectangle_118" x="0" y="0" width="239" height="233" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha"/>
                                    <feGaussianBlur stdDeviation="15" result="blur"/>
                                    <feFlood flood-opacity="0.11"/>
                                    <feComposite operator="in" in2="blur"/>
                                    <feComposite in="SourceGraphic"/>
                                  </filter>
                                </defs>
                                <g id="Group_314" data-name="Group 314" transform="translate(-659 -11357)">
                                  <g transform="matrix(1, 0, 0, 1, 659, 11357)" filter="url(#Rectangle_118)">
                                    <rect id="Rectangle_118-2" data-name="Rectangle 118" width="149" height="143" rx="71.5" transform="translate(45 42)" fill="#dfd7f7"/>
                                  </g>
                                  <image id="unnamed" width="134" height="134" transform="translate(712 11403)" xlink:href="data:image/png;base64,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"/>
                                </g>
                              </svg>

                            </a>

                        </div>
                    </div>
                </div>
            </div>


        </footer>
    </div>
    <script>
        var urlprovinces = '{{ asset('js/Provinces.json') }}';
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="{{ asset('newui/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/ui.js')}}" defer></script>
    <script src="{{ asset('ui/js/scripts.js')}}"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="{{ asset('newui/js/jquery.typeahead.min.js')}}"></script>


    <script>
  $.typeahead({
    input: '.js-typeahead-country_v1',
    order: "desc",
    source: {
        data: [
            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
            "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
            "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
            "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
            "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
            "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
            "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
            "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
            "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
            "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
            "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
            "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
            "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
            "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
            "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
            "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
            "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
            "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
            "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
            "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
            "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
            "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
            "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
            "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
            "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ]
    },
    callback: {
        onInit: function (node) {
            console.log('Typeahead Initiated on ' + node.selector);
        }
    }
});
    </script>
</body>

</html>