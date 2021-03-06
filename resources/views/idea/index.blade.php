<x-app-layout>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input type="search" placeholder="Find an idea" class="w-full placeholder-gray-900 rounded-xl border-none bg-white px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
        <div class="ideas-container  space-y-6 my-6 ">
            @foreach ($ideas as $idea)
            <div
            x-data
            @click="
                const clicked = $event.target
                const target = clicked.tagName.toLowerCase()
                const ignores = ['button', 'svg', 'path', 'a']
                if (! ignores.includes(target)) {
                    clicked.closest('.idea-container').querySelector('.idea-link').click()
                }
            "
             class="idea-container bg-white rounded-xl flex hover:shadow-md transition duration-150 ease-in cursor-pointer">
                <div class="hidden md:block border-r border-gray-100 px-5 py-8">
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

           <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
               <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="{{$idea->user->getAvatar()}}" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
               </div>

               <div class="mx-4 flex flex-col justify-between w-full ">
                   <h4 class="text-xl font-semibold mt-2 md:mt-0">
                       <a href="{{route('idea.show', $idea)}}" class="idea-link hover:underline">{{$idea->title}}</a>
                   </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        {{$idea->description}}
                    </div>

                   <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                       <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                           <div>{{$idea->created_at->diffForHumans()}}</div>
                           <div>&bull;</div>
                           <div>{{$idea->category->name}}</div>
                           <div>&bull;</div>
                           <div class="text-gray-900">3 Comments</div>
                       </div>
                       <div
                        x-data="{isOpen: false}"
                        class="flex items-center space-x-2 mt-4 md:mt-0"
                       >
                            <div class="{{$idea->status->classes}} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                {{$idea->status->name}}
                            </div>
                            <button
                             @click="isOpen = !isOpen"
                             class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3"
                             >
                                <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                                <ul
                                 x-cloak
                                 x-show.transition.origin.top.left="isOpen"
                                 @click.away="isOpen = false"
                                 @keydown.escape.window = "isOpen = false"
                                 class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 md:ml-8 top-8 right-0 md:left-0"
                                 >
                                    <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>

                                </ul>
                            </button>
                        </div>
                        <div class="flex items-center mt-4 md:mt-0 md:hidden">
                            <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                                <div class="text-sm font-bold leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Votes</div>
                            </div>
                            <button class="bg-gray-200 w-20 -mx-5  font-bold text-xxs uppercase rounded-xl px-4 py-3 border transition duration-150 ease-in hover:border-gray-400 border-gray-200" >
                                Vote
                            </button>
                        </div>
                   </div>
               </div>
            </div>
           </div>
           @endforeach
        </div>
        <div class="my-8">
            {{$ideas->links()}}
        </div>

</x-app-layout>
