<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkFlow</title>
    <link rel="shortcut icon" href="https://i.ytimg.com/vi/GBt66Pfltgk/maxresdefault.jpg" type="image/x-icon">
    <link rel="stylesheet" href="Something.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="nav">
        <div id="nav-part1">
            <!-- <svg width="106" id="twogood" height="83" viewBox="0 0 106 83" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_2228_162)">
                    <path d="M5.50062 6.4473H0V0.557617H17.7807V6.4473H12.2464V25.4842H5.50062V6.4473Z"
                        fill="currentColor"></path>
                    <path
                        d="M43.2791 12.4126C43.8662 14.6434 44.027 15.8982 44.0756 16.0715C44.386 14.504 44.629 13.2831 44.8235 12.4126L47.7402 0.56543H54.5571L47.5682 25.492H41.3047L38.2609 14.8582C38.0889 14.2327 37.8122 13.1173 37.4307 11.512C37.1204 12.8008 36.8773 13.9161 36.6006 14.8582L33.6091 25.492H27.3307L20.3418 0.56543H27.1549L29.9931 12.488C30.3035 13.7428 30.5466 14.9976 30.741 16.2185C30.9803 14.9298 31.2944 13.675 31.6048 12.488L34.7309 0.56543H40.1642L43.2791 12.4126Z"
                        fill="currentColor"></path>
                    <path
                        d="M76.5219 22.3113C74.173 24.6188 71.066 25.9784 67.7892 26.1326C64.5124 26.2867 61.2932 25.2248 58.7412 23.1478C57.3228 22.0067 56.1618 20.5745 55.3351 18.9463C54.5085 17.3181 54.0353 15.5313 53.9468 13.7045C53.8584 11.8778 54.1568 10.053 54.8223 8.35149C55.4877 6.64996 56.5049 5.11064 57.8063 3.83585C60.3099 1.37646 63.6678 0 67.1641 0C70.6604 0 74.0184 1.37646 76.5219 3.83585C77.7366 5.04162 78.7013 6.47878 79.3597 8.06372C80.0181 9.64865 80.3572 11.3497 80.3572 13.0679C80.3572 14.7861 80.0181 16.4872 79.3597 18.0721C78.7013 19.6571 77.7366 21.0942 76.5219 22.3V22.3113ZM73.6164 13.0604C73.6164 9.01712 70.9166 5.73879 67.1473 5.73879C63.378 5.73879 60.6782 8.98321 60.6782 13.0604C60.6782 17.1376 63.2023 20.382 67.1473 20.382C70.9876 20.382 73.6164 17.1413 73.6164 13.0604Z"
                        fill="currentColor"></path>
                    <path
                        d="M12.8 39.1893H26.0486C26.086 39.7131 26.086 40.203 26.086 40.6966C26.086 49.3069 21.2436 54.1905 13.2151 54.1905C9.27008 54.1905 6.19257 53.0374 3.70215 50.4939C1.3102 47.9834 -0.0176051 44.6329 0.000176313 41.1525C0.000176313 33.586 5.60923 28.1108 13.2151 28.1108C18.024 28.1108 21.797 30.0665 24.3547 33.8649L18.5101 36.6872C17.1265 34.7692 15.3952 33.831 13.2151 33.831C9.27008 33.831 6.71235 36.6194 6.71235 41.4314C6.71235 46.2434 9.23643 49.0658 13.2151 49.0658C16.7114 49.0658 19.1645 47.1138 19.5122 44.4271H12.7814L12.8 39.1893Z"
                        fill="currentColor"></path>
                    <path
                        d="M49.8502 50.4146C47.3392 52.8731 43.9766 54.249 40.4756 54.2506C37.4173 54.2246 34.4566 53.1629 32.0695 51.2361C30.6511 50.0946 29.49 48.662 28.6633 47.0335C27.8366 45.405 27.3634 43.6179 27.275 41.7909C27.1865 39.9638 27.485 38.1388 28.1504 36.4369C28.8159 34.7351 29.8332 33.1954 31.1347 31.9203C33.6382 29.4609 36.9961 28.0845 40.4924 28.0845C43.9887 28.0845 47.3467 29.4609 49.8502 31.9203C51.0649 33.1261 52.0296 34.5632 52.688 36.1482C53.3465 37.7331 53.6855 39.4342 53.6855 41.1524C53.6855 42.8706 53.3465 44.5717 52.688 46.1566C52.0296 47.7415 51.0649 49.1787 49.8502 50.3845V50.4146ZM46.9447 41.1486C46.9447 37.1054 44.2486 33.827 40.4756 33.827C36.7026 33.827 34.0065 37.0677 34.0065 41.1486C34.0065 45.2296 36.5306 48.4702 40.4756 48.4702C44.316 48.4702 46.9447 45.2258 46.9447 41.1486Z"
                        fill="currentColor"></path>
                    <path
                        d="M77.5629 50.4146C75.0506 52.871 71.6888 54.2466 68.1883 54.2506C65.129 54.224 62.1672 53.1624 59.7784 51.2361C58.3608 50.094 57.2004 48.6611 56.3745 47.0324C55.5485 45.4038 55.0758 43.6168 54.9877 41.7899C54.8997 39.9631 55.1983 38.1383 55.8637 36.4366C56.5292 34.735 57.5462 33.1955 58.8473 31.9203C61.3509 29.4609 64.7088 28.0845 68.2051 28.0845C71.7014 28.0845 75.0594 29.4609 77.5629 31.9203C78.7776 33.1261 79.7423 34.5632 80.4007 36.1482C81.0591 37.7331 81.3982 39.4342 81.3982 41.1524C81.3982 42.8706 81.0591 44.5717 80.4007 46.1566C79.7423 47.7415 78.7776 49.1787 77.5629 50.3845V50.4146ZM74.6574 41.1486C74.6574 37.1054 71.9576 33.827 68.1883 33.827C64.419 33.827 61.7192 37.0677 61.7192 41.1486C61.7192 45.2296 64.2433 48.4702 68.1883 48.4702C72.0286 48.4702 74.6574 45.2258 74.6574 41.1486Z"
                        fill="currentColor"></path>
                    <path
                        d="M83.7168 28.6606H89.6699C94.2693 28.6606 97.9713 28.7322 101.225 31.0346C104.336 33.2277 105.996 36.6869 105.996 41.1447C105.996 45.6024 104.336 49.0202 101.225 51.2547C98.1134 53.4893 94.718 53.5872 90.601 53.5872H83.7168V28.6606ZM91.5358 48.0103C96.6924 48.0103 99.1492 46.0245 99.1492 41.1447C99.1492 36.1933 96.6214 34.2413 91.5358 34.2413H90.3953V48.0103H91.5358Z"
                        fill="currentColor"></path>
                    <path
                        d="M18.9586 65.171C17.16 63.1474 15.4287 62.1564 13.2486 62.1564C9.34095 62.1564 6.74583 65.171 6.74583 69.3725C6.74583 73.2085 9.3073 76.3097 13.2486 76.3097C15.4287 76.3097 17.16 75.3338 18.9586 73.2952V80.7524C16.9763 81.7756 14.784 82.3175 12.5568 82.3351C5.25756 82.3351 0 76.777 0 69.2481C0 61.7193 5.25756 56.1763 12.5568 56.1763C14.7828 56.1891 16.975 56.7259 18.9586 57.7438V65.171Z"
                        fill="currentColor"></path>
                    <path
                        d="M42.4125 78.5214C40.0636 80.8289 36.9566 82.1885 33.6798 82.3426C30.403 82.4968 27.1838 81.4349 24.6318 79.3579C23.2135 78.2168 22.0524 76.7846 21.2258 75.1564C20.3991 73.5282 19.9259 71.7413 19.8375 69.9146C19.749 68.0879 20.0475 66.2631 20.7129 64.5616C21.3783 62.86 22.3956 61.3207 23.697 60.0459C26.1996 57.5922 29.5536 56.2192 33.0454 56.2192C36.5372 56.2192 39.8912 57.5922 42.3938 60.0459C43.6085 61.2517 44.5732 62.6889 45.2316 64.2738C45.8901 65.8587 46.2291 67.5598 46.2291 69.278C46.2291 70.9962 45.8901 72.6973 45.2316 74.2822C44.5732 75.8671 43.6085 77.3043 42.3938 78.5101L42.4125 78.5214ZM39.4883 69.2704C39.4883 65.2272 36.7922 61.9489 33.0192 61.9489C29.2462 61.9489 26.5501 65.1933 26.5501 69.2704C26.5501 73.3476 29.0742 76.5921 33.0192 76.5921C36.8596 76.5921 39.4883 73.3514 39.4883 69.2704Z"
                        fill="currentColor"></path>
                    <path
                        d="M49.8936 75.4543C50.5724 75.4475 51.238 75.6443 51.8057 76.0194C52.3733 76.3946 52.8176 76.9313 53.082 77.5614C53.3464 78.1915 53.4191 78.8865 53.2908 79.5583C53.1624 80.2301 52.8389 80.8483 52.3612 81.3344C51.8835 81.8205 51.2733 82.1526 50.608 82.2886C49.9426 82.4246 49.2522 82.3582 48.6244 82.098C47.9965 81.8378 47.4596 81.3954 47.0817 80.8271C46.7038 80.2587 46.502 79.59 46.502 78.9059C46.498 77.9951 46.853 77.12 47.4889 76.4728C48.1249 75.8256 48.9898 75.4593 49.8936 75.4543Z"
                        fill="currentColor"></path>
                </g>
                <defs>
                    <clipPath id="clip0_2228_162">
                        <rect width="106" height="82.3538" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg> -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.0" height="82" width="100" preserveAspectRatio="xMidYMid meet" viewBox="11.32 24 659.68 367.62">

                <g transform="translate(0.000000,404.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                <path d="M6595 3713 c-128 -144 -196 -203 -286 -253 l-54 -30 35 0 c27 0 32 3 20 11 -12 8 -10 9 7 4 12 -3 35 1 53 10 16 8 30 12 30 7 0 -11 -116 -64 -181 -84 -34 -10 -104 -12 -309 -8 -543 10 -656 7 -745 -19 -148 -43 -333 -148 -450 -256 -101 -93 -108 -96 -23 -12 97 97 239 195 366 252 45 21 81 40 79 41 -9 9 -120 -32 -202 -74 -96 -50 -249 -166 -340 -258 -88 -90 -228 -261 -425 -519 -335 -439 -522 -651 -790 -894 -211 -192 -358 -285 -500 -315 l-65 -14 60 -1 c34 0 84 8 115 19 74 25 76 18 3 -10 -150 -56 -320 -26 -435 78 -49 44 -389 552 -950 1422 -130 201 -247 388 -261 415 -30 61 -85 118 -137 145 -79 41 -170 51 -518 60 -224 6 -337 12 -347 20 -11 9 -16 7 -24 -8 -6 -11 -39 -38 -74 -60 -66 -42 -112 -97 -127 -154 -13 -45 -6 -174 10 -193 7 -9 10 -18 7 -21 -8 -8 38 -135 53 -144 7 -4 10 -13 6 -18 -4 -6 2 -16 12 -21 11 -6 35 -42 53 -81 19 -38 37 -70 42 -70 4 0 7 -5 7 -10 0 -6 9 -20 20 -32 11 -12 20 -28 20 -35 0 -7 7 -13 15 -13 8 0 15 -6 15 -14 0 -8 6 -17 13 -20 9 -5 9 -7 0 -12 -8 -4 -4 -15 15 -35 60 -65 67 -76 64 -94 -3 -17 -1 -17 7 -5 9 12 11 11 11 -8 0 -13 11 -33 25 -46 14 -13 25 -28 25 -35 0 -6 4 -11 10 -11 5 0 16 -15 23 -32 8 -18 21 -39 30 -47 10 -7 17 -21 17 -30 0 -9 8 -21 19 -28 10 -6 21 -24 24 -40 3 -15 20 -43 37 -61 16 -19 28 -38 24 -43 -3 -5 2 -12 10 -15 9 -3 16 -13 16 -21 0 -8 5 -11 10 -8 6 3 13 -2 16 -12 18 -54 31 -73 47 -73 10 0 17 -6 16 -12 -4 -22 12 -48 30 -48 10 0 25 -21 41 -61 16 -39 34 -64 50 -72 14 -7 26 -22 28 -35 2 -12 9 -22 15 -22 7 0 6 -4 -3 -10 -13 -8 -11 -11 7 -16 14 -4 24 -17 29 -37 3 -16 19 -41 35 -55 16 -13 29 -31 29 -39 0 -9 17 -32 38 -51 20 -20 36 -39 35 -44 -2 -4 3 -8 11 -8 12 0 41 -51 41 -72 0 -4 9 -13 19 -21 13 -9 17 -21 13 -36 -3 -11 -1 -21 5 -21 12 0 38 -26 38 -38 0 -5 9 -17 20 -27 11 -10 20 -22 20 -27 0 -5 20 -30 45 -55 25 -24 45 -51 45 -59 0 -8 5 -14 11 -14 5 0 8 -4 5 -8 -2 -4 0 -14 5 -22 8 -13 10 -13 19 0 8 12 10 9 10 -12 0 -20 4 -26 15 -22 10 4 15 0 15 -15 0 -12 6 -21 15 -21 8 0 15 -9 15 -20 0 -13 7 -20 20 -20 11 0 20 -5 20 -10 0 -6 12 -20 26 -33 14 -12 32 -35 40 -50 8 -15 19 -25 24 -22 6 4 10 0 10 -7 0 -13 57 -56 93 -70 10 -4 17 -16 15 -25 -2 -14 3 -17 20 -15 12 2 21 0 20 -5 -2 -4 1 -9 7 -10 5 -1 12 -11 17 -22 4 -12 16 -21 28 -21 22 0 22 -15 4 -82 -3 -9 0 -19 6 -23 5 -3 10 -22 10 -41 0 -19 4 -34 8 -34 8 0 12 -16 15 -65 1 -16 8 -34 14 -38 7 -4 13 -17 13 -27 0 -12 5 -17 13 -14 8 3 22 -7 33 -22 10 -14 25 -32 32 -39 6 -8 12 -18 12 -24 0 -6 9 -11 20 -11 11 0 20 -5 20 -11 0 -6 9 -9 20 -6 15 4 20 0 21 -16 0 -12 3 -17 5 -10 4 8 23 10 63 6 58 -5 166 11 187 28 7 6 16 9 20 8 18 -4 96 31 107 48 4 7 12 13 17 13 16 0 113 63 141 91 14 14 61 50 105 79 151 102 232 176 803 744 315 314 578 576 585 581 6 6 56 53 111 105 187 178 445 406 559 495 21 17 66 52 100 79 119 94 130 97 380 102 203 4 326 15 351 33 6 4 35 13 65 20 127 31 278 129 431 281 120 120 300 347 364 460 17 31 -38 -27 -83 -85 -62 -81 -154 -186 -160 -180 -2 2 27 39 65 82 70 79 163 197 163 207 0 12 -21 5 -38 -11 -10 -10 -50 -56 -89 -103 -128 -153 -321 -329 -435 -394 -18 -11 -64 -34 -103 -51 -96 -43 -109 -48 -117 -47 -5 1 -8 -3 -8 -9 0 -12 14 -9 106 17 97 28 344 190 328 216 -5 7 -3 8 5 3 8 -5 31 10 62 41 27 27 49 43 49 37 0 -29 -239 -217 -340 -268 -153 -77 -163 -79 -480 -80 -283 0 -286 0 -361 -27 -42 -15 -105 -44 -140 -64 -87 -51 -256 -186 -409 -328 -58 -54 -57 -52 10 15 172 173 378 332 495 380 60 25 74 45 23 34 -149 -32 -347 -181 -708 -529 -727 -702 -1086 -1013 -1410 -1225 -194 -126 -401 -214 -531 -225 l-64 -6 50 14 c37 10 43 14 25 16 -21 2 -22 3 -5 7 32 6 99 36 113 50 7 7 20 13 27 13 7 0 30 15 49 34 20 18 49 36 65 39 18 4 32 14 36 27 4 11 10 18 15 15 5 -3 11 -1 15 5 3 5 16 10 28 11 12 0 16 3 9 6 -7 3 19 23 60 47 98 56 252 159 363 243 6 5 48 37 95 72 135 103 265 214 470 402 58 53 119 108 135 123 17 15 233 228 480 474 248 247 506 500 574 563 68 62 129 119 135 124 46 43 114 91 180 125 76 40 80 41 204 46 70 3 208 8 307 10 242 5 248 6 233 17 -8 5 -3 6 15 3 15 -4 27 -2 27 4 0 5 10 9 23 8 49 -4 194 89 310 199 91 86 327 366 327 388 0 13 -39 -26 -45 -46 -4 -11 -11 -17 -16 -14 -5 4 -9 1 -9 -6 0 -7 -3 -9 -7 -5 -5 4 -1 13 7 19 21 16 53 67 42 67 -5 0 -44 -39 -87 -87z m-2015 -756 c0 -2 -10 -12 -22 -23 l-23 -19 19 23 c18 21 26 27 26 19z m-420 -1051 c0 -2 -8 -10 -17 -17 -16 -13 -17 -12 -4 4 13 16 21 21 21 13z m-1075 -556 c-3 -5 -12 -10 -18 -10 -7 0 -6 4 3 10 19 12 23 12 15 0z"/>
                <path d="M2876 3356 c-29 -30 -79 -89 -111 -132 -32 -44 -98 -133 -147 -199 -88 -119 -287 -386 -370 -497 -40 -55 -50 -63 -72 -59 -5 1 -4 -4 2 -11 8 -10 3 -22 -19 -48 -16 -20 -29 -29 -29 -21 0 18 -49 -47 -56 -74 -3 -12 -1 -33 5 -47 10 -25 338 -529 389 -596 l25 -33 39 38 c21 20 38 33 38 29 0 -5 12 9 28 32 15 22 67 87 116 144 l89 104 28 -25 c34 -32 99 -122 99 -138 0 -6 3 -13 8 -15 4 -1 25 -30 47 -63 22 -33 43 -61 48 -63 4 -2 7 -9 7 -16 0 -7 12 -27 28 -44 15 -17 36 -42 47 -55 33 -37 43 -40 79 -17 60 36 160 139 406 415 63 71 127 142 141 157 l25 28 -140 214 c-78 118 -157 241 -178 273 -20 32 -119 187 -220 344 -100 158 -201 315 -222 350 -38 62 -39 63 -53 42 -22 -33 -53 -67 -53 -58 0 4 14 24 30 45 34 43 36 50 15 50 -9 0 -39 -24 -69 -54z"/>
                <path d="M5158 3383 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
                <path d="M2152 2430 c-18 -29 -15 -38 4 -12 9 13 14 25 12 27 -2 2 -9 -5 -16 -15z"/>
                <path d="M4888 2216 c-60 -21 -120 -61 -170 -113 -42 -43 -314 -403 -518 -684 -41 -57 -97 -133 -123 -168 -37 -49 -45 -66 -35 -72 7 -5 17 -9 22 -9 5 0 6 -3 3 -6 -16 -16 -69 22 -103 75 -21 31 -39 58 -40 60 -2 2 -12 -2 -21 -10 -16 -13 -17 -12 -4 4 8 9 11 20 8 24 -12 11 -55 -27 -163 -144 -59 -65 -157 -167 -216 -226 -127 -127 -148 -162 -136 -227 4 -24 14 -58 23 -76 8 -18 15 -37 15 -43 0 -6 4 -11 9 -11 5 0 26 -36 47 -80 22 -43 45 -79 52 -80 6 0 11 -3 11 -7 -3 -21 2 -43 14 -55 13 -15 32 -47 54 -89 19 -38 102 -118 129 -125 13 -3 24 -10 24 -14 0 -12 80 -17 133 -8 57 11 180 62 170 71 -3 4 -1 7 5 7 6 0 17 6 24 13 7 7 39 30 71 50 140 90 104 40 876 1192 173 259 352 526 398 594 46 68 83 125 81 127 -2 2 -89 9 -194 15 -208 13 -360 8 -414 -12 -52 -20 -120 -67 -163 -113 -21 -23 -34 -32 -28 -20 13 27 90 98 132 121 19 10 54 26 79 35 41 15 43 16 15 17 -16 0 -46 -6 -67 -13z m-178 -199 c0 -2 -10 -12 -22 -23 l-23 -19 19 23 c18 21 26 27 26 19z m-86 -112 c-9 -14 -18 -25 -21 -25 -5 0 5 18 20 38 17 22 18 13 1 -13z m-734 -639 c0 -2 -8 -10 -17 -17 -16 -13 -17 -12 -4 4 13 16 21 21 21 13z"/>
                </g>
                </svg>

            <svg xmlns="http://www.w3.org/2000/svg" height = "83" version="1.0" preserveAspectRatio="xMidYMid meet" viewBox="113.09 20.1 160.11 184.9">

                <g transform="translate(0.000000,259.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                <path d="M1526 2368 c-10 -47 -26 -246 -26 -318 0 -57 5 -83 20 -107 11 -18 24 -33 30 -33 22 0 10 -47 -15 -58 -34 -16 -65 -69 -65 -114 0 -40 37 -94 76 -108 13 -5 32 -31 47 -64 32 -69 71 -119 120 -153 27 -18 37 -33 35 -47 -3 -20 -9 -21 -233 -26 -155 -3 -237 -9 -251 -17 -28 -16 -74 -71 -74 -88 0 -7 -13 -15 -30 -18 -26 -6 -30 -11 -29 -39 0 -18 35 -168 77 -333 l77 -300 647 -3 647 -2 10 37 c6 21 42 167 82 325 76 305 77 317 25 318 -14 1 -27 14 -41 42 -36 73 -57 78 -312 78 l-223 0 0 23 c0 14 19 39 54 70 38 33 66 69 91 119 26 53 44 75 65 84 80 34 84 172 6 214 -26 13 -38 60 -16 60 6 0 19 15 30 33 40 63 3 187 -77 256 -70 62 -110 71 -313 71 -210 0 -253 10 -334 75 -61 50 -93 57 -100 23z m174 -139 c43 -16 77 -19 233 -19 215 0 256 -9 312 -71 51 -57 75 -132 52 -163 -12 -16 -18 -16 -94 -1 -75 15 -90 15 -177 1 -84 -13 -105 -13 -186 0 -82 13 -101 13 -173 0 -113 -22 -111 -24 -103 144 3 74 9 145 12 157 l6 22 33 -25 c19 -14 57 -34 85 -45z m230 -322 c25 -1 79 3 121 7 42 5 102 5 133 2 51 -7 56 -10 56 -32 0 -34 -32 -44 -146 -44 -107 0 -134 -9 -134 -46 0 -22 -4 -25 -27 -22 -18 2 -29 10 -31 23 -8 40 -21 45 -128 45 -115 0 -157 12 -152 44 4 29 44 36 163 29 55 -3 120 -6 145 -6z m-375 -205 c-9 -9 -25 19 -25 44 0 11 6 26 13 33 10 10 13 4 15 -29 2 -23 0 -45 -3 -48z m95 35 c0 -84 6 -88 135 -85 l110 3 3 28 c3 23 8 27 33 27 22 0 29 -5 29 -19 0 -35 23 -42 136 -39 l109 3 5 64 c7 89 30 96 30 9 0 -93 -22 -157 -76 -217 -66 -73 -138 -106 -234 -106 -66 1 -83 5 -138 34 -106 57 -159 144 -169 276 -5 65 -4 75 11 75 13 0 16 -10 16 -53z m679 31 c9 -26 0 -60 -17 -66 -8 -2 -12 12 -12 42 0 49 15 61 29 24z m-489 -28 l0 -31 -62 3 c-60 3 -63 4 -66 31 l-3 27 65 0 66 0 0 -30z m310 0 l0 -30 -60 0 -60 0 0 30 0 30 60 0 60 0 0 -30z m-220 -395 c30 0 72 4 92 8 l37 8 3 -38 c3 -38 3 -38 51 -41 52 -3 54 -7 31 -40 -15 -21 -20 -22 -214 -22 -187 0 -200 1 -210 19 -17 34 -11 41 34 41 46 0 56 10 56 56 0 21 3 23 33 16 17 -4 57 -7 87 -7z m-282 -90 c7 -14 12 -28 12 -30 0 -3 -92 -5 -205 -5 -200 0 -205 0 -193 19 21 34 50 40 214 40 l161 1 11 -25z m921 10 c16 -8 31 -21 34 -30 6 -13 -18 -15 -199 -15 l-205 0 16 30 16 30 155 0 c116 0 162 -4 183 -15z m39 -352 c-32 -131 -63 -255 -69 -275 l-10 -38 -597 0 -597 0 -64 258 c-36 141 -66 265 -69 275 -4 16 36 17 731 17 l735 0 -60 -237z"/>
                <path d="M1905 889 c-87 -174 -89 -181 -71 -195 11 -8 23 -14 28 -14 4 0 49 82 99 182 85 169 90 183 73 195 -10 7 -23 13 -29 13 -6 0 -51 -81 -100 -181z"/>
                <path d="M1593 972 c-92 -57 -123 -82 -123 -97 0 -15 32 -40 122 -95 66 -41 125 -77 130 -79 9 -3 37 27 38 41 0 4 -45 35 -100 68 -55 34 -100 63 -100 65 0 2 45 31 100 65 55 34 100 65 100 68 -1 12 -27 42 -36 41 -5 0 -64 -35 -131 -77z"/>
                <path d="M2120 1035 c-19 -23 -9 -36 85 -94 48 -31 88 -60 88 -66 -1 -5 -44 -37 -96 -69 -93 -59 -95 -60 -80 -83 8 -13 18 -23 22 -23 14 0 246 151 254 166 6 11 5 21 -4 29 -19 18 -239 155 -249 155 -4 0 -13 -7 -20 -15z"/>
                </g>
                </svg>
            <!-- <svg src = "Workflow1.svg"></svg> -->
        </div>
        <div id="nav-part2">
            <div id="links">
                <a href="Register.html">Sign Up/Sign In</a>
                <a href="something.php">Projects</a>
                <a href="">About Us</a>
                <a href="Logout.php">Logout</a><?php echo $_SESSION["Email"] ?>
            </div>
            <div id="icons" style="color : black">
            <a href="CS.html" style = " color: black;text-decoration:none">
                <!-- <i class="ri-menu-fill"></i> -->
                <i class="ri-shopping-cart-2-line"></i></a>
            </div>
        </div>
    </div>



    <div id="cursor"></div>
    <div id="main">
        <div id="page1">
            <h1>WorkFlow</h1>
            <h1>Web Solutions</h1>
            <div id="video-container">
                <div id="play">
                    Play</div>
                <a href="https://www.youtube.com/watch?v=HIj8wU_rGIU" target="_blank"><video autoplay loop muted src="How to Start Coding _ Programming for Beginners _ Learn Coding _ Intellipaat.mp4"></video>
                </a>
            </div>
        </div>
        <div id="page2">
            <div id="elem1" class="elem">
                <img data-scroll data-scroll-speed="1"
                    src="img 3.jpg"
                    alt="">
                <!-- <div class="dets"></div> -->
                <div data-scroll data-scroll-speed="-2" class="dets plan-info">
                    
                <a href = "https://github.com/prathamudeshi/Online-Compiler-Internship" style = "color:black; text-decoration:none">Onlline Compiler</a>
                    <!-- <div class="subdets">
                        A full fledged Online Compiler capable of compiling C and Python language while barely using any system resources.
                    </div> -->
                
                </div>
            </div>
            <div id="elem2" class="elem">
                <img data-scroll data-scroll-speed="1"
                    src="ggggg.png"
                    alt="">
                <!-- <div class="dets"></div> -->

                <div data-scroll data-scroll-speed="-2" class="dets" style = "color : black; text-decoration:none">
                    <a href = "https://github.com/prathamudeshi/WorkFlow" style = "color:black; text-decoration:none">Workflow</a>
                </div>
            </div>
            <div id="elem3" class="elem">
                <img data-scroll data-scroll-speed="1"
                    src="img 4.jpg"
                    alt="">
                <!-- <div class="dets"></div> -->
                <div data-scroll data-scroll-speed="-2" class="dets">
                <a href = "https://github.com/prathamudeshi/chatbot.github.io" style = "color:black; text-decoration:none">Chat-Bot</a>
                </div>
            </div>
        </div>
        <div id="page3" class="pg-3">
            <div class="child" id="child1" class="child1" style="padding-right=20%">
                <a href="CS.html"><img src="images/Garv.png"
                    alt=""></a>
            </div>
            <div class="child" id="child2" class="child2">
            <a href="CS.html"><img src="images/pratham.png"
                    alt=""></a>
            </div>
            <div class="child" id="child3" class="child3">
            <a href="CS.html"><img src="images/sakshi.png"
                    alt=""></a>
            </div>
            <div class="child" id="child4">
            <a href="CS.html"><img src="images/pratham.png"
                    alt=""></a>
            </div>
        </div>


        <!-- <div id="plans" style: "margin: 50px;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        </div> -->
        <footer>
            <div class="content">
              <div class="top">
                <div class="logo-details">
                  <i class="fab fa-slack"></i>
                  <span class="logo_name">Workflow</span>
                </div>
                <div class="media-icons">
                  <a href="https://www.facebook.com/share/dR4a8CTVToScbrfS/?mibextid=LQQJ4d">
                      <img style= "max-width: 100%;" class = "fab fa-facebook-f" src="images/facebook.png" alt="">
                    <!-- <i class="fab fa-facebook-f"> -->
            <!-- </i> -->
        </a>
        <a href="#">
                      <img style= "max-width: 100%;" class = "fab fa-twitter-f" src="https://cdn3.iconfinder.com/data/icons/basicolor-reading-writing/24/077_twitter-512.png" alt="">
                    <!-- <i class="fab fa-facebook-f"> -->
            <!-- </i> -->
        </a>
                  

        <a href="https://www.instagram.com/__workflow_?igsh=cmF3YnJ6c2FieW12&utm_source=qr">
                      <img style= "max-width: 100%;" class = "fab fa-facebook-f" src="https://cdn4.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-instagram-new-circle-512.png" alt="">
                    <!-- <i class="fab fa-facebook-f"> -->
            <!-- </i> -->
        </a>
                

        <a href="#">
                      <img style= "max-width: 100%;" class = "fab fa-facebook-f" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/linkedin_circle-512.png" alt="">
                    <!-- <i class="fab fa-facebook-f"> -->
            <!-- </i> -->
        </a>
                 

        <a href="#">
                      <img style= "max-width: 100%;" class = "fab fa-facebook-f" src="https://www.iconpacks.net/icons/2/free-reddit-logo-icon-2436-thumb.png" alt="">
                    <!-- <i class="fab fa-facebook-f"> -->
            <!-- </i> -->
        </a>
                </div>
              </div>
              <div class="link-boxes">
                <ul class="box">
                  <li class="link_name">Company</li>
                  <li><a href="Something.php">Home</a></li>
                  <li><a href="Contactus.html">Contact us</a></li>
                  <li><a href="Something.html">About us</a></li>
                  <li><a href="#">Get started</a></li>
                </ul>
                <ul class="box">
                  <li class="link_name">Services</li>
                  <li><a href="#">App design</a></li>
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Logo design</a></li>
                  <li><a href="#">Banner design</a></li>
                </ul>
                <ul class="box">
                  <li class="link_name">Account</li>
                  <li><a href="#">Profile</a></li>
                  <li><a href="#">My account</a></li>
                </ul>
                <ul class="box input-box">
                  <li class="link_name">Subscribe</li>
                  <li><input type="text" placeholder="Enter your email"></li>
                  <li><input type="button" value="Subscribe"></li>
                </ul>
              </div>
            </div>
            <div class="bottom-details">
            </div>
          </footer>
    </div>
    

    


    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"
        integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="Something.js"></script>
</body>

</html>