<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold">
            <svg  class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            <span class="ml-2">
                All Ideas
            </span>
        </a>
    </div>
    <div class="idea-container bg-white rounded-xl flex  ">

   <div class="flex flex-col md:flex-row flex-1 px-4 py-6 ">
       <div class="flex-none mx-4 md:mx-0">
            <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
            </a>
       </div>

       <div class="mx-2 md:mx-4 w-full ">
           <h4 class="text-xl font-semibold">
               <a href="" class="hover:underline">{{$idea->title}}</a>
           </h4>
            <div class="text-gray-600 mt-3">
            {{$idea->description}}
            </div>

           <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
               <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                   <div class="md:block hidden font-bold text-gray-900">{{$idea->user->name}}</div>
                   <div>{{$idea->created_at->diffForHumans()}}</div>
                   <div class="md:block hidden">&bull;</div>
                   <div>Category 1</div>
                   <div>&bull;</div>
                   <div class="text-gray-900">3 Comments</div>
               </div>
               <div
               x-data="{isOpen: false}"
               class="flex items-center space-x-2 mt-4 md:mt-0">
                    <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        Open
                    </div>
                    <button
                    @click="isOpen = !isOpen"
                    class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                        <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                        <ul
                        x-cloak
                        x-show.transition.origin.top.left="isOpen"
                        @click.away="isOpen = false"
                        @keydown.escape.window = "isOpen = false"
                         class="absolute z-10 text-left ml-8 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3">
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

   <div class="buttons-container flex items-center justify-between mt-6">
       <div class="flex flex-col md:flex-row items-center space-x-4  md:ml-6">
        <div
        x-data="{isOpen: false}"
         class=" relative">
            <button
            @click="isOpen = !isOpen"
            type="button" class="flex w-32 items-center justify-center h-11 text-sm bg-blue
            font-semibold rounded-xl border text-white border-blue hover:bg-blue-hover transition duration-150 ease-in px-1 py-3 ">
                Reply
            </button>
            <div
            x-cloak
            x-show.transition.origin.top.left="isOpen"
            @click.away="isOpen = false"
            @keydown.escape.window = "isOpen = false"
            class="absolute z-10 w-64 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                <form action="#" class="space-y-4 px-4 py-6">
                    <div>
                        <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900
                        border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                    </div>
                    <div class="flex flex-col md:flex-row items-center space-x-0 md:space-x-3">
                        <button>
                            <button type="button" class="flex w-full md:w-1/2 items-center justify-center h-11 text-sm bg-blue
                            font-semibold rounded-xl border text-white border-blue hover:bg-blue-hover transition duration-150 ease-in px-1 py-3 ">
                                Post comment
                        </button>
                        <button type="button" class="mt-2 md:mt-0 flex items-center justify-center w-full md:w-32 h-11 text-xs bg-gray-200
                        font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                        <svg  class="w-4 transform -rotate-45 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                          </svg>
                            <span class="ml-2">Attach</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
            <div
            x-data="{isOpen: false}"
             class="relative">
                <button
                                    @click="isOpen = !isOpen"
                                    type="button" class="mt-2 md:mt-0 flex items-center w-34 justify-center h-11 text-sm bg-gray-200
                                    font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 "
                >
                    <span>Set Status</span>
                    <svg  class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                x-cloak
                x-show.transition.origin.top.left="isOpen"
                @click.away="isOpen = false"
                @keydown.escape.window = "isOpen = false"
                 class=" absolute z-10 w-64 md:w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                    <form action="#" class="space-y-4 px-4 py-6">
                        <div class="space-y-2">
                            <div>
                              <label class="inline-flex items-center">
                                <input class="form-radio text-green bg-gray-200 border-none" type="radio" name="radio-direct" value="1">
                                <span class="ml-2">Open</span>
                              </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                  <input class="form-radio text-purple bg-gray-200 border-none" type="radio"  name="radio-direct" value="1">
                                  <span class="ml-2">Considering</span>
                                </label>
                              </div>
                            <div>
                              <label class="inline-flex items-center">
                                <input class="form-radio text-yellow bg-gray-200 border-none" type="radio"  name="radio-direct" value="1">
                                <span class="ml-2">In Progress</span>
                              </label>
                            </div>
                            <div>
                                <label class="inline-flex items-center">
                                  <input class="form-radio text-green bg-gray-200 border-none" type="radio"   name="radio-direct" value="1">
                                  <span class="ml-2">Implemented</span>
                                </label>
                              </div>
                              <div>
                                <label class="inline-flex items-center">
                                  <input class="form-radio text-red bg-gray-200 border-none" type="radio"  name="radio-direct" value="1">
                                  <span class="ml-2">Closed</span>
                                </label>
                              </div>
                          </div>
                          <div>
                            <textarea name="update_comment" id="update_comments" cols="30" rows="3"
                            class=" w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add an update comment (optional)" ></textarea>
                        </div>
                        <div class="flex items-center justify-between space-x-3">
                            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200
                            font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                            <svg  class="w-4 transform -rotate-45 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                              </svg>
                                <span class="ml-2">Attach</span>
                            </button>
                            <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue
                            font-semibold rounded-xl border text-white border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 ">
                                <span class="ml-2">Update</span>
                            </button>
                        </div>
                        <div>
                            <div>
                              <label class="font-normal inline-flex items-center">
                                <input class="rounded bg-gray-200" name="notify_voters" type="checkbox"  checked="">
                                <span class="ml-2">Notify all voters</span>
                              </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="hidden md:flex items-center space-x-3 ">
            <div class="bg-white font-semibold text-center rounded-xl px-3 y-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button type="button" class=" items-center uppercase  h-11 text-xs bg-gray-200
            font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 ">
                <span>Vote</span>
            </button>
        </div>

   </div>

   <div class="comments-container relative space-y-6  md:ml-22 my-8 mt-1 pt-4">
    <div class="comment-container bg-white rounded-xl flex  ">

        <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
            <div class="flex-none">
                 <a href="#">
                     <img src="https://source.unsplash.com/200x200/?face&crop=face&n=1" alt="avatar" class="w-14 h-14 rounded-xl">
                 </a>

            </div>

            <div class="md:mx-4 w-full ">
                {{-- <h4 class="text-xl font-semibold">
                    <a href="" class="hover:underline"> A random title</a>
                </h4> --}}
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, illum.
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>10 hours ago</div>
                    </div>
                    <div
                    x-data="{isOpen: false}"
                    class="flex items-center space-x-2">
                         <button
                         @click="isOpen = !isOpen"
                         class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                             <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                             <ul
                             x-cloak
                             x-show.transition.origin.top.left="isOpen"
                             @click.away="isOpen = false"
                             @keydown.escape.window = "isOpen = false"
                              class="absolute z-10 text-left md:ml-8 top-8 right-0 md:left-0 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3 ">
                                 <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                 <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>

                             </ul>
                         </button>
                     </div>
                </div>
            </div>
         </div>
        </div>
        <div class="is-admin comment-container relative bg-white rounded-xl flex  ">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                     <a href="#">
                         <img src="https://source.unsplash.com/200x200/?face&crop=face&k=1" alt="avatar" class="w-14 h-14 rounded-xl">
                         <p class="uppercase text-center text-xxs font-bold text-blue mt-2">Admin</p>
                     </a>
                </div>

                <div class="mx-4 w-full ">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline"> A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, illum.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">John Doe</div>
                            <div>10 hours ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                             <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                 <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                                 {{-- <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                     <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                     <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>

                                 </ul> --}}
                             </button>
                         </div>
                    </div>
                </div>
             </div>
            </div>
            <div class="comment-container relative bg-white rounded-xl flex  ">

                <div class="flex flex-1 px-4 py-6">
                    <div class="flex-none">
                         <a href="#">
                             <img src="https://source.unsplash.com/200x200/?face&crop=face&i=1" alt="avatar" class="w-14 h-14 rounded-xl">
                         </a>

                    </div>

                    <div class="mx-4 w-full ">
                        {{-- <h4 class="text-xl font-semibold">
                            <a href="" class="hover:underline"> A random title</a>
                        </h4> --}}
                        <div class="text-gray-600 mt-3 line-clamp-3">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod, illum.
                        </div>

                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                                <div class="font-bold text-gray-900">John Doe</div>
                                <div>10 hours ago</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                 <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                     <svg  fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z"> </svg>
                                     {{-- <ul class="absolute text-left ml-8 w-44 font-semibold bg-white shadow-dialog rounded-xl py-3">
                                         <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                         <li><a href="" class="hover:bg-gray-100 block px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>

                                     </ul> --}}
                                 </button>
                             </div>
                        </div>
                    </div>
                 </div>
                </div>
   </div>

</x-app-layout>
