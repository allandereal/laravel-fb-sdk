<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="https://tailwindui.com/css/app.css?id=d9bbd2598695bd400211" />
    <title>Apple Music</title>
    <style>
        .bars-hidden::-webkit-scrollbar {
            display: none;
        }
        /*IE 11*/
        .bars-hidden {
            -ms-overflow-style: none;
        }
    </style>
</head>
<body class="text-gray-900 antialiased font-sans">
<!--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.3/dist/alpine.js" defer></script>-->
<div class="w-screen bg-gray-50">
    <div class="w-full h-full">
        <div class="bg-gray-100 w-full sticky top-0 z-50">
            <div class="flex items-center justify-between px-6 py-2 border-gray-200 border-b-2">
                <div>
                    <h1 class="text-3xl font-bold tracking-tight">Library</h1>
                </div>
                <div class="flex items-center justify-between text-xs">
                    <div class="py-1 px-3 bg-red-500 rounded-full text-white font-bold">Sort</div>
                    <div class="py-2 px-2 ml-2 bg-red-500 rounded-full text-white font-bold">
                        <p class="tracking-tight leading-tight">&bull;&bull;&bull;</p>
                    </div>
                    <div class="ml-2">
                        <img class="w-14 h-14 rounded-full shadow-inner" src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&q=80">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 px-2">
            <div class="pl-5 py-1 bg-gray-300 flex items-center justify-between rounded-full text-gray-500 sm:font-bold sm:text-sm text-xs font-bold">
                <div>Recent</div>
                <div>Songs</div>
                <div>Artists</div>
                <div>Albums</div>
                <div class="px-3 py-1 bg-gray-400 text-white rounded-full mr-1">Playlists</div>
            </div>
        </div>
        <div class="mt-4 px-6">
            <div class="flex justify-between text-center">
                <div class="flex items-center justify-center bg-gray-200 w-1/2 text-red-500 font-bold text-sm rounded-lg">
                    <span class="inline-block">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g fill="currentColor">
                            <g>
                                <polygon id="Rectangle-161" points="4 4 16 10 4 16"></polygon>
                            </g>
                        </g>
                      </svg>
                    </span>
                    <span class="inline-block ml-1">Play</span>
                </div>
                <div class="flex items-center justify-center bg-gray-200 py-2 w-1/2 ml-3 text-red-500 font-bold text-sm rounded-lg">
                    <div class="">
                        <svg class="w-4 h-4" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M6.58578644,12.8284271 L4.41028736,15.0039262 C3.83091964,15.5832939 2.81955537,16 2.00104344,16 L0,16 L0,14 L2.00104344,14 C2.29046199,14 2.79273472,13.7930517 2.9960738,13.5897126 L5.17157288,11.4142136 L6.58578644,12.8284271 L6.58578644,12.8284271 Z M16,6 L13.9998075,6 C13.7100858,6 13.2055579,6.20865568 13.0039262,6.41028736 L10.8284271,8.58578644 L10.8284271,8.58578644 L9.41421356,7.17157288 L11.5897126,4.9960738 C12.1666986,4.41908781 13.1800499,4 13.9998075,4 L16,4 L16,1 L20,5 L16,9 L16,6 Z M16,16 L13.9998075,16 C13.1800499,16 12.1666986,15.5809122 11.5897126,15.0039262 L2.9960738,6.41028736 C2.79273472,6.20694828 2.29046199,6 2.00104344,6 L0,6 L0,4 L2.00104344,4 C2.81955537,4 3.83091964,4.41670608 4.41028736,4.9960738 L13.0039262,13.5897126 C13.2055579,13.7913443 13.7100858,14 13.9998075,14 L16,14 L16,11 L20,15 L16,19 L16,16 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="ml-2">Shuffle</div>
                </div>
            </div>
            <div class="mt-2 p-2 bg-gray-200 rounded-lg font-bold text-sm flex items-center justify-center text-red-500">
                <div>
                    <svg class="w-5 h-5" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g fill="currentColor">
                            <g>
                                <path d="M15,9 L12,9 L12,11 L15,11 L15,14 L17,14 L17,11 L20,11 L20,9 L17,9 L17,6 L15,6 L15,9 Z M0,3 L10,3 L10,5 L0,5 L0,3 Z M0,11 L10,11 L10,13 L0,13 L0,11 Z M0,7 L10,7 L10,9 L0,9 L0,7 Z M0,15 L10,15 L10,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="ml-3">Create Playlist</div>
            </div>
            <div class="mt-3">
                <h2 class="h-8 font-extrabold text-xl">Favourites</h2>
                <div class="pt-4 -mt-3 flex justify-between overflow-x-auto bars-hidden">
                    <div class="w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1531315630201-bb15abeb1653?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">My Playlist</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Various Artists</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80">
                            <div class="w-6 h-6 absolute top-0 right-0 -mr-2 -mt-2 bg-red-500 text-white rounded-full font-semibold text-xs border border-white border-solid leading-6 text-center align-middle">4</div>
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Global Pop</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Apple Music</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1478760329108-5c3ed9d495a0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Influences</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Apple Music</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1527769929977-c341ee9f2033?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Inspired</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Apple Music</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h2 class="font-extrabold text-xl">Recently Added</h2>
                <div class="pt-4 -mt-3 pb-2 flex justify-between overflow-x-auto bars-hidden">
                    <div class="w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1498550744921-75f79806b8a7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                            <div class="w-6 h-6 absolute top-0 right-0 -mr-2 -mt-2 bg-red-500 text-white rounded-full font-semibold text-xs border border-white border-solid leading-6 text-center align-middle">2</div>
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Deep Cuts</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Apple Music</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1503455637927-730bce8583c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Levixone</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Chikibombe</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1479981280584-037818c1297d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Fire</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Coopy Bly</p>
                        </div>
                    </div>
                    <div class="ml-4 w-22">
                        <div class="w-20 h-20 relative">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1531315630201-bb15abeb1653?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Appy (Mulina)</h3>
                            <p class="font-medium text-xs text-gray-400 truncate">Zabuli</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 pb-16">
                <h2 class="font-extrabold text-xl">Your Playlist</h2>
                <div class="pt-4 -mt-3 pb-2 flex justify-between overflow-x-auto bars-hidden">
                    <div class="w-28">
                        <div class="h-28 w-28">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <h3 class="mt-2 font-bold text-xs text-gray-700 truncate">Top Hits</h3>
                    </div>
                    <div class="ml-4">
                        <div class="w-28 h-28">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1503455637927-730bce8583c0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <div class="mt-2 leading-tight">
                            <h3 class="font-bold text-xs text-gray-700 truncate">Most Played</h3>
                        </div>
                    </div>
                    <div class="ml-4">
                        <div class="w-28 h-28">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1479981280584-037818c1297d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <h3 class="mt-2 font-bold text-xs text-gray-700 truncate">Highway Blues</h3>
                    </div>
                    <div class="ml-4">
                        <div class="w-28 h-28">
                            <img class="w-full h-full object-cover rounded-lg" src="https://images.unsplash.com/photo-1522441815192-d9f04eb0615c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=150&q=80">
                        </div>
                        <h3 class="mt-2 font-bold text-xs text-gray-700 truncate">Super Gospel</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed bottom-0 left-0 pt-3 p-2 bg-gray-200 w-full flex items-center justify-between px-6 text-xs font-semibold rounded-tl-lg rounded-tr-lg z-50">
            <div class="flex flex-col items-center text-red-500">
                <svg class="w-6 h-6" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="currentColor">
                        <g>
                            <path d="M14,14.1707057 C13.6872211,14.0601542 13.3506354,14 13,14 L11,14 C9.34314575,14 8,15.3431458 8,17 C8,18.6568542 9.34314575,20 11,20 L13,20 C14.6568542,20 16,18.6568542 16,17 L16,4.66666667 L20,4 L20,0 L14,1 L14,3.5 L14,14.1707057 Z M0,3 L12,3 L12,5 L0,5 L0,3 Z M0,7 L12,7 L12,9 L0,9 L0,7 Z M0,11 L12,11 L12,13 L0,13 L0,11 Z M0,15 L6,15 L6,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
                <p>Library</p>
            </div>
            <div class="flex flex-col items-center">
                <svg class="w-6 h-6 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z"></path>
                </svg>
                <p class="text-gray-400">For You</p>
            </div>
            <div class="flex flex-col items-center">
                <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="currentColor">
                        <g>
                            <path d="M18,4.28571429 L8,5.71428571 L8,17 C8,18.6568542 6.65685425,20 5,20 L3,20 C1.34314575,20 0,18.6568542 0,17 C0,15.3431458 1.34314575,14 3,14 L5,14 C5.35063542,14 5.68722107,14.0601542 6,14.1707057 L6,4 L6,2 L20,0 L20,2.5 L20,15 C20,16.6568542 18.6568542,18 17,18 L15,18 C13.3431458,18 12,16.6568542 12,15 C12,13.3431458 13.3431458,12 15,12 L17,12 C17.3506354,12 17.6872211,12.0601542 18,12.1707057 L18,4.28571429 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
                <p class="text-gray-400">Browse</p>
            </div>
            <div class="flex flex-col items-center">
                <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="currentColor">
                        <g>
                            <path d="M20,9.00292933 L20,17.9941413 C20,19.1019465 19.1017876,20 18.0092049,20 L1.99079514,20 C0.891309342,20 0,19.1029399 0,17.9941413 L0,8.00585866 C0,6.89805351 0.898212381,6 1.99079514,6 L15.7965507,6 L0.741180955,1.96592583 L1.25881905,0.0340741737 L20,5.05575848 L20,6.56315542 L20,9.00292933 L20,9.00292933 Z M15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C13.3431458,12 12,13.3431458 12,15 C12,16.6568542 13.3431458,18 15,18 L15,18 Z M2,8 L18,8 L18,10 L2,10 L2,8 L2,8 Z M3.5,18 C4.32842712,18 5,17.3284271 5,16.5 C5,15.6715729 4.32842712,15 3.5,15 C2.67157288,15 2,15.6715729 2,16.5 C2,17.3284271 2.67157288,18 3.5,18 Z M8.5,18 C9.32842712,18 10,17.3284271 10,16.5 C10,15.6715729 9.32842712,15 8.5,15 C7.67157288,15 7,15.6715729 7,16.5 C7,17.3284271 7.67157288,18 8.5,18 Z M15,17 C16.1045695,17 17,16.1045695 17,15 C17,13.8954305 16.1045695,13 15,13 C13.8954305,13 13,13.8954305 13,15 C13,16.1045695 13.8954305,17 15,17 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
                <p class="text-gray-400">Radio</p>
            </div>
            <div class="flex flex-col items-center">
                <svg class="w-6 h-6 text-gray-500" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g fill="currentColor">
                        <g>
                            <path d="M12.9056439,14.3198574 C11.5509601,15.3729184 9.84871145,16 8,16 C3.581722,16 0,12.418278 0,8 C0,3.581722 3.581722,0 8,0 C12.418278,0 16,3.581722 16,8 C16,9.84871145 15.3729184,11.5509601 14.3198574,12.9056439 L19.6568542,18.2426407 L18.2426407,19.6568542 L12.9056439,14.3198574 Z M8,14 C11.3137085,14 14,11.3137085 14,8 C14,4.6862915 11.3137085,2 8,2 C4.6862915,2 2,4.6862915 2,8 C2,11.3137085 4.6862915,14 8,14 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
                <p class="text-gray-400">Search</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
