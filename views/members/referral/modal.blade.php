<div class="absolute inset-0 bg-gray-100 bg-opacity-20">
    <div class="flex h-full flex-col items-center justify-center">
        <div class="bg-white rounded-md p-14" style="width: 668px; height: 556px;">
            <h3 class="text-center font-extrabold text-3xl leading-10">Please verify you're a real person.</h3>
            <p class="pt-6 text-center text-lg leading-9">We've texted a six digit code to your phone number. Please enter that code here. (Sorry we need to do this, but we don't want bots or spammers inside our communities.)</p>
            <form>
                <div class="pt-14 flex flex-row justify-center space-x-8">
                    <div class="flex flex-row space-x-4">
                        <div>
                            <input type="text" name="code-1" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                        <div>
                            <input type="text" name="code-2" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                        <div>
                            <input type="text" name="code-3" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                    </div>
                    <div class="flex flex-row space-x-4">
                        <div>
                            <input type="text" name="code-4" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                        <div>
                            <input type="text" name="code-5" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                        <div>
                            <input type="text" name="code-6" class="outline-none text-center rounded-lg" style="height: 85px; width: 59px; border: 1px solid #d1d1d1;">
                        </div>
                    </div>
                </div>

                <div class="pt-14 flex justify-center">
                    <input name="button" type="submit" id="button" class="text-white bg-{{ $brand }} leading-none text-base font-bold border-0 rounded-full select-none cursor-pointer text-center py-4 px-16 uppercase font-roboto" value="i'm real, let's start!"/>
                </div>
            </form>
        </div>
    </div>
</div>