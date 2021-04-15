<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full placeholder-gray-900 rounded-xl border-none bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
        <div class="ideas-container hover:shadow-md transition duration-150 ease-in space-y-6 my-6 cursor-pointer">
            <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibolt text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-200 font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                        Vote
                    </button>
                </div>

            </div>
           <div class="flex px-2 py-6">
               <a href="" class="flex-none">
                   <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
               <div class="mx-4">
                   <h4 class="text-xl font-semibold">
                       <a href="" class="hover:underline"> A random title</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odit porro voluptas laudantium, error saepe totam ipsa ad nam eos suscipit accusamus reprehenderit? Iusto dolor accusantium saepe dicta rem perspiciatis distinctio temporibus, sed nihil quibusdam quis natus laudantium culpa laborum eius fugit facilis voluptatem eaque molestias! Deleniti asperiores reiciendis dolor? Saepe excepturi asperiores veritatis possimus natus nobis ex blanditiis, dolor consequuntur reprehenderit doloribus. Eaque, quaerat expedita eum, dignissimos fuga repellendus harum iusto perspiciatis suscipit neque esse! Aliquid necessitatibus itaque quasi debitis minus in magnam natus aliquam aspernatur illum nostrum suscipit eum veritatis recusandae officiis voluptates, illo pariatur saepe? Exercitationem, error?
                   </div>

                   <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>10 hours ago</div>
                           <div>&bull;</div>
                           <div>Category 1</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div class="flex items-center space-x-2">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                Open
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                                <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                    <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>

                                </ul>
                            </button>
                        </div>
                   </div>
               </div>

           </div>
        </div>
        <div class="ideas-container hover:shadow-md transition duration-150 ease-in space-y-6 my-6 cursor-pointer">
            <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibolt text-2xl text-blue">66</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                <div class="mt-8">
                    <button class="bg-blue w-20  font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                        Voted
                    </button>
                </div>

            </div>
           <div class="flex px-2 py-6">
               <a href="" class="flex-none">
                   <img src="https://source.unsplash.com/200x200/?face&crop=face&s=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
               <div class="mx-4">
                   <h4 class="text-xl font-semibold">
                       <a href="" class="hover:underline"> A random title</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odit porro voluptas laudantium, error saepe totam ipsa ad nam eos suscipit accusamus reprehenderit? Iusto dolor accusantium saepe dicta rem perspiciatis distinctio temporibus, sed nihil quibusdam quis natus laudantium culpa laborum eius fugit facilis voluptatem eaque molestias! Deleniti asperiores reiciendis dolor? Saepe excepturi asperiores veritatis possimus natus nobis ex blanditiis, dolor consequuntur reprehenderit doloribus. Eaque, quaerat expedita eum, dignissimos fuga repellendus harum iusto perspiciatis suscipit neque esse! Aliquid necessitatibus itaque quasi debitis minus in magnam natus aliquam aspernatur illum nostrum suscipit eum veritatis recusandae officiis voluptates, illo pariatur saepe? Exercitationem, error?
                   </div>

                   <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>10 hours ago</div>
                           <div>&bull;</div>
                           <div>Category 1</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div class="flex items-center space-x-2">
                            <div class="text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 bg-yellow text-white">
                                In Progress
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                            </button>
                        </div>
                   </div>
               </div>

           </div>
        </div>
        <div class="ideas-container hover:shadow-md transition duration-150 ease-in space-y-6 my-6 cursor-pointer">
            <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibolt text-2xl text-blue">66</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                <div class="mt-8">
                    <button class="bg-gray-200 w-20  font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                        Vote
                    </button>
                </div>

            </div>
           <div class="flex px-2 py-6">
               <a href="" class="flex-none">
                   <img src="https://source.unsplash.com/200x200/?face&crop=face&g=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
               <div class="mx-4">
                   <h4 class="text-xl font-semibold">
                       <a href="" class="hover:underline"> A random title</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odit porro voluptas laudantium, error saepe totam ipsa ad nam eos suscipit accusamus reprehenderit? Iusto dolor accusantium saepe dicta rem perspiciatis distinctio temporibus, sed nihil quibusdam quis natus laudantium culpa laborum eius fugit facilis voluptatem eaque molestias! Deleniti asperiores reiciendis dolor? Saepe excepturi asperiores veritatis possimus natus nobis ex blanditiis, dolor consequuntur reprehenderit doloribus. Eaque, quaerat expedita eum, dignissimos fuga repellendus harum iusto perspiciatis suscipit neque esse! Aliquid necessitatibus itaque quasi debitis minus in magnam natus aliquam aspernatur illum nostrum suscipit eum veritatis recusandae officiis voluptates, illo pariatur saepe? Exercitationem, error?
                   </div>

                   <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>10 hours ago</div>
                           <div>&bull;</div>
                           <div>Category 1</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div class="flex items-center space-x-2">
                            <div class="text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 bg-red text-white">
                                Closed
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                            </button>
                        </div>
                   </div>
               </div>

           </div>
        </div>
        <div class="ideas-container hover:shadow-md transition duration-150 ease-in space-y-6 my-6 cursor-pointer">
            <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibolt text-2xl text-blue">66</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                <div class="mt-8">
                    <button class="bg-gray-200 w-20  font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                        Vote
                    </button>
                </div>

            </div>
           <div class="flex px-2 py-6">
               <a href="" class="flex-none">
                   <img src="https://source.unsplash.com/200x200/?face&crop=face&j=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
               <div class="mx-4">
                   <h4 class="text-xl font-semibold">
                       <a href="" class="hover:underline"> A random title</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odit porro voluptas laudantium, error saepe totam ipsa ad nam eos suscipit accusamus reprehenderit? Iusto dolor accusantium saepe dicta rem perspiciatis distinctio temporibus, sed nihil quibusdam quis natus laudantium culpa laborum eius fugit facilis voluptatem eaque molestias! Deleniti asperiores reiciendis dolor? Saepe excepturi asperiores veritatis possimus natus nobis ex blanditiis, dolor consequuntur reprehenderit doloribus. Eaque, quaerat expedita eum, dignissimos fuga repellendus harum iusto perspiciatis suscipit neque esse! Aliquid necessitatibus itaque quasi debitis minus in magnam natus aliquam aspernatur illum nostrum suscipit eum veritatis recusandae officiis voluptates, illo pariatur saepe? Exercitationem, error?
                   </div>

                   <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>10 hours ago</div>
                           <div>&bull;</div>
                           <div>Category 1</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div class="flex items-center space-x-2">
                            <div class="text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 bg-green text-white">
                                Implemented
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                            </button>
                        </div>
                   </div>
               </div>

           </div>
        </div>
        <div class="ideas-container hover:shadow-md transition duration-150 ease-in space-y-6 my-6 cursor-pointer">
            <div class="idea-container bg-white rounded-xl flex">
                <div class="border-r border-gray-100 px-5 py-8">
                    <div class="text-center">
                        <div class="font-semibolt text-2xl text-blue">66</div>
                        <div class="text-gray-500">Votes</div>
                    </div>

                <div class="mt-8">
                    <button class="bg-gray-200 w-20  font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                        Vote
                    </button>
                </div>

            </div>
           <div class="flex px-2 py-6">
               <a href="" class="flex-none">
                   <img src="https://source.unsplash.com/200x200/?face&crop=face&l=1" alt="avatar" class="w-14 h-14 rounded-xl">
               </a>
               <div class="mx-4">
                   <h4 class="text-xl font-semibold">
                       <a href="" class="hover:underline"> A random title</a>
                   </h4>
                   <div class="text-gray-600 mt-3 line-clamp-3">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit odit porro voluptas laudantium, error saepe totam ipsa ad nam eos suscipit accusamus reprehenderit? Iusto dolor accusantium saepe dicta rem perspiciatis distinctio temporibus, sed nihil quibusdam quis natus laudantium culpa laborum eius fugit facilis voluptatem eaque molestias! Deleniti asperiores reiciendis dolor? Saepe excepturi asperiores veritatis possimus natus nobis ex blanditiis, dolor consequuntur reprehenderit doloribus. Eaque, quaerat expedita eum, dignissimos fuga repellendus harum iusto perspiciatis suscipit neque esse! Aliquid necessitatibus itaque quasi debitis minus in magnam natus aliquam aspernatur illum nostrum suscipit eum veritatis recusandae officiis voluptates, illo pariatur saepe? Exercitationem, error?
                   </div>

                   <div class="flex items-center justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>10 hours ago</div>
                           <div>&bull;</div>
                           <div>Category 1</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div class="flex items-center space-x-2">
                            <div class="text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4 bg-purple text-white">
                                Considering
                            </div>
                            <button class="relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                            </button>
                        </div>
                   </div>
               </div>

           </div>
        </div>

    </div>
</x-app-layout>
