<label class="block">

                        <span class="text-gray-700">Titel</span>

                        <input type="text" value="{{old('titel', $project->titel)}}" name="titel" class="mt-1 block w-full" placeholder="">

                    </label>

                    <label class="block">

                        <span class="text-gray-700">Intro</span>

                        <input type="text" value="{{old('intro', $project->intro)}}" name="intro" class="mt-1 block w-full" placeholder="">

                    </label>


                    <label class="block">

                        <span class="text-gray-700">img</span>

                        <input name="img" value="{{old('img', $project->img)}}"type="text" class="mt-1 block w-full" placeholder="">

                    </label>

                    <label class="block">

                        <span class="text-gray-700">Beschrijving</span>

                        <input type="text" value="{{old('description', $project->description)}}" name="description" class="mt-1 block w-full" placeholder="">
</label>
            