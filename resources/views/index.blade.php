<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight NHaasGroteskDSPro-65Md">
            Home
        </h2>
    </x-slot>



@if (session('success'))
    <div class="alert alert-success text-white mx-20 scale-100 p-6 bg-white dark:bg-gray-900/30 dark:bg-gradient-to-bl from-black-800/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500" style="z-index:1000; position:absolute;" id="success-message">
        {{ session('success') }}
    </div>

    <script>
        // Set a timeout to hide the success message after 5000 milliseconds (5 seconds)
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000);
    </script>
@endif
    <div class="px-6 lg:px-8 pt-0 ">  
        <div class="">
            <div class="max-w-6xl mx-auto border-black border">
                <div class="max-w-6xl mx-auto bg-black flex border-black border " style="background-color:#6a8d3e;">
                    <div class="flex justify-center h-full text-center lg:px-12 px-6 py-32">
                    <p class="mt-4 text-white lg:text-xl text-xl leading-relaxed"><span class="text-black font-black">IbifiriWari,</span> is a creative agency specializing in creative management, development and strategy, curation, creative business development and production. We work as a conduit between 
                    <br><span id="dynamic-text" class=" font-black text-black leading-relaxed"></span> committed to the development of creative and cultural ecosystems supporting creatives, culture workers, organizations and businesses across industries. 
                    </p>
                    
                    </div>
                </div> 

                <div class="max-w-6xl mx-auto scale-100 border-black border py-16 px-6" style="background-color:#6a8d3e;">
                    <div class="flex flex-col justify-center h-full text-center">
                    <h2 class=" text-xl font-black pb-10 text-white">IN THIS HOUSE... WE DO REALLY COOL AND GOOD STUFF</h2>
                        <div class="lg:grid grid-cols-3 gap-4">
                            
                            <div class="relative overflow-hidden rounded-lg py-2">
                                <div class="slider rounded-lg">
                                    <div class="slide-track  rounded-lg">
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_2_eugka5.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_1_o6durn.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559788/DSC_7492_u3regg.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559783/DSC_7498_eiblxb.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855658/unnamed_3_poqjfw.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_2_eugka5.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_1_o6durn.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559788/DSC_7492_u3regg.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559783/DSC_7498_eiblxb.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855658/unnamed_3_poqjfw.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_2_eugka5.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710855657/unnamed_1_o6durn.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559788/DSC_7492_u3regg.jpg" alt="">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;"  class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1709559783/DSC_7498_eiblxb.jpg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="  inset-0 block flex flex-col py-4 justify-center text-left">
                                    <p class="text-white text-base font-bold"> Hair Today, GONE Tomorrow, 2023</p>
                                    <p class="text-white text-xs ">Curated by Tamunoibifiri "Firi" Fombo for IbifiriWari Installation at Richmond Hill Central Library.</p> 
                                    <a href="#"  x-data="" x-on:click.prevent="$dispatch('open-modal', 'project1')" id="add-feature-button" class="text-white text-sm font-bold py-4">View More</a>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-lg py-2">
                                    <div class="slider rounded-lg">
                                        <div class="slide-track  rounded-lg">
                                            <div class="slide  rounded-lg">
                                                <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710857345/unnamed_7_kab76w.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_6_gsddbd.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_4_yrn5i9.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_5_vy7yqj.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide  rounded-lg">
                                                <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710857345/unnamed_7_kab76w.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_6_gsddbd.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_4_yrn5i9.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_5_vy7yqj.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide  rounded-lg">
                                                <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710857345/unnamed_7_kab76w.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_6_gsddbd.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_4_yrn5i9.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_5_vy7yqj.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide  rounded-lg">
                                                <img style="object-fit:cover;" class=" inset-0" src="https://res.cloudinary.com/nieleche/image/upload/v1710857345/unnamed_7_kab76w.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                            <div class="slide">
                                                <img style="object-fit:cover;" class=" inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710857344/unnamed_6_gsddbd.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                            </div>
                                        
                                           
                                        </div>
                                    </div>
                               
                                <div class="inset-0 block flex flex-col py-4 justify-center text-left">
                                    <p class="text-white text-base font-bold">Managing Creative Project Workshop In Partnership with The Gift Shop 2.0</p>
                                    <p class="text-white text-xs ">This workshop facilitated by IbifiriWari designed for creatives at all levels, provides practical insights and tools that can be applied to enhancing and managing creative projects from ideation to execution.</p> 
                                    <a href="#"  x-data="" x-on:click.prevent="$dispatch('open-modal', 'project2')" id="add-feature-button" class="text-white text-sm font-bold py-4">View More</a>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-lg  py-2">
                                <div class="slider rounded-lg">
                                    <div class="slide-track  rounded-lg">
                                        
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_9_co7uzv.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863773/unnamed_8_iwrhta.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_tz9q8a.png" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_9_co7uzv.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863773/unnamed_8_iwrhta.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_tz9q8a.png" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_9_co7uzv.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863773/unnamed_8_iwrhta.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_tz9q8a.png" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_9_co7uzv.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863773/unnamed_8_iwrhta.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_tz9q8a.png" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div> <div class="slide">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863771/unnamed_9_co7uzv.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                        <div class="slide  rounded-lg">
                                            <img style="object-fit:cover;" class="inset-0"  src="https://res.cloudinary.com/nieleche/image/upload/v1710863773/unnamed_8_iwrhta.jpg" alt="Image 3" class=" inset-0 w-full h-full object-cover">
                                        </div>
                                    
                                    
                                    </div>
                                </div>
                         
                                <div class="inset-0 block flex flex-col py-4 justify-center text-left">
                                    <p class="text-white text-base font-bold">O’ojeh : Learning Arm of Ehik0studios</p>
                                    <p class="text-white text-xs ">Ehik0studio and IbifiriWari launch O’ojeh, the learning arm of Ehik0studio.</p> 
                                    <a href="#"  x-data="" x-on:click.prevent="$dispatch('open-modal', 'project3')" id="add-feature-button" class="text-white text-sm font-bold py-4">View More</a>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-lg py-2">
                                <img src="https://res.cloudinary.com/nieleche/image/upload/v1710863969/unnamed_11_wnf9qd.jpg" alt="Image 3" class="rounded-lg inset-0 w-full h-96 object-cover">
                             
                                <div class="  inset-0 block flex flex-col py-4 justify-center text-left">
                                    <p class="text-white text-base font-bold">Design TO Festival 2024: Golden Beauty Supply by Ehiko Odeh In partnership with MCA Gallery</p>
                                    <p class="text-white text-xs ">Since the 1970s, the West Indian Barber & Beauty Supply Corporation at 860 Bathurst Street has served the needs of Toronto’s Black, Caribbean, and African communities with hard-to-find products and services that are tailored to their unique needs</p> 
                                    <a href="#"  x-data="" x-on:click.prevent="$dispatch('open-modal', 'project4')" id="add-feature-button" class="text-white text-sm font-bold py-4">View More</a>
                                </div>
                            </div>

                            <div class="relative overflow-hidden rounded-lg  py-2">
                                <img src="https://res.cloudinary.com/nieleche/image/upload/v1710864151/unnamed_12_a0olm6.jpg" alt="Image 3" class="rounded-lg inset-0 w-full h-96 object-cover">
                               
                                <div class="  inset-0 block flex flex-col py-4 justify-center text-left">
                                    <p class="text-white text-base font-bold">In conversation: Ehiko Odeh and  Melissa J. Nelson.</p>
                                    <p class="text-white text-xs ">A conversation between multidisciplinary artist and researcher; Ehiko Odeh and award-winning archivist, writer and educator; Melissa J. Nelson exploring the relevance of cultural archives in relation to Black Canadian and Afro-diasporic communities.</p> 
                                    <a href="#"  x-data="" x-on:click.prevent="$dispatch('open-modal', 'project5')" id="add-feature-button" class="text-white text-sm font-bold py-4">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
            

        
                <x-modal name="project1" focusable>
                        <!-- Modal Content -->
                        <div class="bg-orange-500 container p-10  pb-0">
                            <p class="text-black text-base font-bold py-2">HAIR TODAY, GONE TOMORROW,  2023</p>
                            <p class="text-black pb-4 text-xs ">Curated by Tamunoibifiri "Firi" Fombo for IbifiriWari 
                            Installation at Richmond Hill Central Library.

                            Hair Today, Gone Tomorrow is a visual installation that delves into the history and evolving narratives surrounding Black hair care. Featuring a curated collection of haircare products, tools and artworks by Ehiko Odeh, the exhibition explores the transient nature of time and embodies themes of memory while highlighting harmful impacts and representation from the hair and beauty industry.

                            Ehiko Odeh presents a compelling showcase of haircare products dating back to the 50s sourced from West Indian Golden Beauty Supply, a historic Black-owned beauty supply store on Bathurst Street - the Bathurst and Bloor neighbourhood was once called Blackhurst. Originally established during the significant wave of Caribbean migration in the 70s, the store served as an important destination for haircare and beauty needs. Unfortunately, it faces closure today. These hair products serve as archival materials to what was once the flagship of haircare among Black populations. Ehiko Odeh pays attention to the contents, ingredients and language around advertising. Accompanied in the box of archival haircare products are digital paintings and collages that speak to afro-hairstyles - the care we give our hair is often intricate and there is a need to pay attention to the content of what goes in our hair as much as the finished product of beauty.

                            ‘Hair Today, Gone Tomorrow' serves as both memorabilia and contemporary bookmarks to Ehiko's interpretation of a somewhat bygone era and the present. Odeh's ongoing research and artistic exploration delve into the nuanced relationships and memories we hold on a personal and communal level - in relation to haircare products, tools and societal representations and perceptions of beauty. The installation invites viewers to reflect on their relationship with hair care, particularly the care rituals we have and the subliminal and not-so-subliminal messages sent to us through marketing and advertising. The show also invites viewers to recollect memories and learn more about the impact of what was, what is and what could be.
                            </p> 
                        </div>
                        
                </x-modal>

                <x-modal name="project2" focusable>
                    <!-- Modal Content -->
                        <div class="bg-orange-500 container p-10  pb-0">
                            <p class="text-black text-base font-bold py-2">Managing Creative Project Workshop In Partnership with The Gift Shop 2.0</p>
                            <p class="text-black pb-4 text-xs ">
                            This workshop facilitated by IbifiriWari designed for creatives at all levels, provides practical insights and tools that can be applied to enhancing and managing creative projects from ideation to execution. 

                            This workshop includes a conversation with Hansel Igbavboa and Adé Abegunde moderated by Tamunoibifiri Fombo about managing projects, people, and processes in the creative and cultural sector.
                            </p> 
                        </div>
                </x-modal>

                <x-modal name="project3" focusable>
                    <!-- Modal Content -->
                        <div class="bg-orange-500 container p-10 pb-0">
                            <p class="text-black text-base font-bold py-2">O’ojeh : Learning Arm of Ehik0studios</p>
                            <p class="text-black pb-4 text-xs ">Ehik0studio and IbifiriWari launch O’ojeh, the learning arm of Ehik0studio. 
                            O’ojeh launches with a six-week after-school art program in partnership with Art Heart  Community Art Centre. The program will explore memory and art therapy using painting and collage techniques facilitated by multidisciplinary artist; Ehiko Odeh. 
                            Thanks to Spring Grant for supporting this program.
                            </p> 
                        </div>
                </x-modal>

                <x-modal name="project4" focusable>
                    <!-- Modal Content -->
                        <div class="bg-orange-500 container p-10 pb-0">
                            <p class="text-black text-base font-bold py-2">Design TO Festival 2024: Golden Beauty Supply by Ehiko Odeh In partnership with MCA Gallery</p>
                            <p class="text-black pb-4 text-xs ">Since the 1970s, the West Indian Barber & Beauty Supply Corporation at 860 Bathurst Street has served the needs of Toronto’s Black, Caribbean, and African communities with hard-to-find products and services that are tailored to their unique needs. The facility is split up into a barber shop, a beauty salon, and a beauty supply store called Golden Beauty Supply.
                            Ehiko Odeh’s artistic practice has long focused on the beauty practices of the Black community and the representation of melanated hair in the wider public. She has done much research on this subject matter at Golden Beauty Supply.
                            Upon her arrival in Canada to study at OCAD University, Ehiko grappled with the challenge of finding community as she commuted from Hamilton to Toronto. It was through braiding hair that she fostered connections in the city. Her work explores the idea that the attention Black people give to their hair can create moments of intimacy, vulnerability, and trust. Golden Beauty Supply has been an important part of that journey. Now that the landlord has put 860 Bathurst up for sale, Ehiko is called to honour this icon of the Canadian Black experience.
                            </p> 
                        </div>
                        <div class="bg-orange-500 container p-10">
                                <iframe src="https://drive.google.com/file/d/1g4IbHKVQZXAOrcAgQH2RqojdfQVqosy5/preview" width="600" height="480" allow="autoplay"></iframe>
                        </div>
                </x-modal>

                <x-modal name="project5" focusable>
                    <!-- Modal Content -->
                        <div class="bg-orange-500 container p-10 pb-0">
                            <p class="text-black text-base font-bold py-2">Archiving Culture through Hair and Beauty in Black Canadian Communities
                            In conversation: Ehiko Odeh and  Melissa J. Nelson.
                            </p>
                            <p class="text-black pb-4 text-xs ">A conversation between multidisciplinary artist and researcher; Ehiko Odeh and award-winning archivist, writer and educator; Melissa J. Nelson exploring the relevance of cultural archives in relation to Black Canadian and Afro-diasporic communities. This conversation also examines the contribution of Ehiko Odeh’s Golden Beauty Supply installation to preserving Black Canadian spaces and experiences.
                            </p> 
                        </div>
                        
                </x-modal>

                <style>
                    .carousel {
                        position: relative;
                        overflow: hidden;
                        margin: 0 auto;
                        width: 100%;
                    }

                    .carousel-inner2 , .carousel-inner3 , .carousel-inner4, .carousel-inner5 , .carousel-inner6 {
                        display: flex;
                        transition: transform 0.5s ease;
                    }

                    .carousel-item2 , .carousel-item3 , .carousel-item4 , .carousel-item5,  .carousel-item6 {
                        flex: 0 0 100%;
                        width: 100%;
                        display:flex;
                        justify-content:center;
                    }

                    .carousel-item2 img ,   .carousel-item3 img ,   .carousel-item4 img , .carousel-item5 img,  .carousel-item6 img {
                        width:400px;
                        height:400px;
                        border-radius: 0.5rem;
                        object-fit: contain;
                    }

                    .prev-btn2, .next-btn2 , .prev-btn3, .next-btn3 , .prev-btn4, .next-btn4 , .prev-btn5, .next-btn5 ,  .prev-btn6, .next-btn6 {
                        position: absolute;
                        top: 60%;
                        transform: translateY(-50%);
                        padding: 10px;
                        cursor: pointer;
                        z-index: 1;
                        background-color:rgb(16 185 129 / var(--tw-bg-opacity)) ;
                    }

                    .prev-btn2 , .prev-btn3 , .prev-btn4 , .prev-btn5 , .prev-btn6{
                        left: 0;
                    }

                    .next-btn2 , .next-btn3 , .next-btn4 , .next-btn5 , .next-btn6 {
                        right: 0;
                    }


                </style>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const prevBtn = document.querySelector('.prev-btn2');
                        const nextBtn = document.querySelector('.next-btn2');
                        const carouselInner = document.querySelector('.carousel-inner2');
                        const counter = document.querySelector('.counter2');
                        let currentIndex = 0;

                        function updateCounter() {
                            counter.innerHTML = '';
                            for (let i = 0; i < carouselInner.children.length; i++) {
                                const counterNumber = document.createElement('div');
                                counterNumber.textContent = i + 1;
                                counterNumber.classList.add('counter-number2');
                                if (i === currentIndex) {
                                    counterNumber.classList.add('active');
                                }
                                counter.appendChild(counterNumber);
                            }
                        }

                        function goToNextSlide() {
                            currentIndex = (currentIndex + 1) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        }

                        // Add automatic sliding
                        const slideInterval = setInterval(goToNextSlide, 5000); // Adjust the interval time as needed (in milliseconds)

                        prevBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            currentIndex = (currentIndex - 1 + carouselInner.children.length) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        });

                        nextBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            goToNextSlide();
                        });

                        updateCounter();
                    });
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const prevBtn = document.querySelector('.prev-btn3');
                        const nextBtn = document.querySelector('.next-btn3');
                        const carouselInner = document.querySelector('.carousel-inner3');
                        const counter = document.querySelector('.counter2');
                        let currentIndex = 0;

                        function updateCounter() {
                            counter.innerHTML = '';
                            for (let i = 0; i < carouselInner.children.length; i++) {
                                const counterNumber = document.createElement('div');
                                counterNumber.textContent = i + 1;
                                counterNumber.classList.add('counter-number2');
                                if (i === currentIndex) {
                                    counterNumber.classList.add('active');
                                }
                                counter.appendChild(counterNumber);
                            }
                        }

                        function goToNextSlide() {
                            currentIndex = (currentIndex + 1) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        }

                        // Add automatic sliding
                        const slideInterval = setInterval(goToNextSlide, 3000); // Adjust the interval time as needed (in milliseconds)

                        prevBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            currentIndex = (currentIndex - 1 + carouselInner.children.length) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        });

                        nextBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            goToNextSlide();
                        });

                        updateCounter();
                    });
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        const prevBtn = document.querySelector('.prev-btn4');
                        const nextBtn = document.querySelector('.next-btn4');
                        const carouselInner = document.querySelector('.carousel-inner4');
                        const counter = document.querySelector('.counter2');
                        let currentIndex = 0;

                        function updateCounter() {
                            counter.innerHTML = '';
                            for (let i = 0; i < carouselInner.children.length; i++) {
                                const counterNumber = document.createElement('div');
                                counterNumber.textContent = i + 1;
                                counterNumber.classList.add('counter-number2');
                                if (i === currentIndex) {
                                    counterNumber.classList.add('active');
                                }
                                counter.appendChild(counterNumber);
                            }
                        }

                        function goToNextSlide() {
                            currentIndex = (currentIndex + 1) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        }

                        // Add automatic sliding
                        const slideInterval = setInterval(goToNextSlide, 3000); // Adjust the interval time as needed (in milliseconds)

                        prevBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            currentIndex = (currentIndex - 1 + carouselInner.children.length) % carouselInner.children.length;
                            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
                            updateCounter();
                        });

                        nextBtn.addEventListener('click', function () {
                            clearInterval(slideInterval); // Stop automatic sliding when user interacts with buttons
                            goToNextSlide();
                        });

                        updateCounter();
                    });
                </script>

                <div class="max-w-6xl mx-auto scale-100 py-16 px-6 flex justify-center border-black border" style="background-color:#da162f;">
                    <div class="flex flex-col justify-center h-full text-center">
                        <h2 class=" text-xl font-semibold  pb-10 text-white uppercase">WHAT WE GET UP TO IN THIS HOUSE</h2>
                        <style>
                            .shape {
                                width: 300px;
                                height:200px;
                                background-color: transparent;
                                border-radius: 50%;
                                transition: all 0.3s ease-in-out;
                                position: relative;
                            }

                            @media (max-width: 620px) { 
                                .shape {
                                    height:100% !important;
                                }
                                .shape2 {
                                    height:100% !important; 
                                }
                            }


                            .shape2 {
                                border-radius: 5px;
                                background-color: transparent;
                            }

                            .shape:hover {
                                border-radius: 5px;
                            }

                            .shape::before {
                                content: '';
                                position: absolute;
                                width: 100%;
                                height: 100%;
                                top: 0;
                                left: 0;
                                background-color: transparent;
                                border-radius: 50%;
                                transition: opacity 0.3s ease-in-out;
                                opacity: 0;
                            }

                            .shape:hover::before {
                                opacity: 1;
                            }
                        </style>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="relative shape2 items-center group lg:px-10">
                                <h3 class="text-white text-left font-black text-lg py-4 leading-none">Creative Solutions for businesses and non-profit organizations</h3>
                                <div class=" text-white text-left text-sm left-0 w-full ">
                                    <div class="list-disc">
                                        <p>Facilitating strategic Partnerships | Collaborations | Sponsorships opportunities.</p>
                                        <p>Developing and implementing community engagement and development strategies.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:shape shape2 items-center group lg:px-10">
                                <h3 class="text-white text-left font-black text-lg py-4 leading-none">Creative Management and Development</h3>
                                <div class=" text-white text-left text-sm left-0 ">
                                    <div class="">
                                        <p>Managing and developing creative talents.</p>
                                        <p>Facilitating the development of creative and cultural projects and ideas from ideation to excellent execution.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative shape2 items-center group lg:px-10">
                                <h3 class="text-white text-left font-black text-lg py-4 leading-none">Creative Production</h3>
                                <div class=" text-white text-left text-sm left-0">
                                    <div class="">
                                        <p>Media campaign development and production.</p>
                                        <p>Strategic communications and outreach.</p>
                                        <p>Story development consultations.</p>
                                        <p>Creative and cultural direction.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:shape shape2 items-center group lg:px-10">
                                <h3 class="text-white text-left font-black text-lg py-4 leading-none">Exhibitions, Programming and Events</h3>
                                <div class=" text-white text-left text-sm left-0 w-full ">
                                    <div class="">
                                        <p>Event planning and production.</p>
                                        <p>Program development consultation.</p>
                                        <p>Exhibition curation advisory.</p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--<div class="max-w-5xl mx-auto  scale-100 py-16 bg-black rounded-lg">
                    <div class="flex flex-col justify-center  text-center">
                        <h2 class=" text-3xl font-semibold pt-10 pb-2 text-orange-500">Who keeps IbifiriWari going?</h2>
                        <h2 class=" text-xl font-semibold pb-10 text-orange-500 italics">Meet some of the people who make the good work happen..</h2>
                        
                        <div class="lg:grid grid-cols-2 gap-4">
                                <div class="relative text-left lg:text-center overflow-hidden rounded-lg px-2 py-4">
                                <h3 class="text-white  text-base font-black">Tamunoibifiri “Firi” Fombo</h3>
                                <h3 class="text-white text-sm ">Executive & Creative Director</h3>
                            </div>
                                <div class="relative text-left lg:text-center overflow-hidden rounded-lg px-2 py-4">
                                <h3 class="text-white text-base font-black">Mukenyi Sharon</h3>
                                <h3 class="text-white  text-sm ">Financial Manager</h3>
                            </div>
                                <div class="relative text-left lg:text-center overflow-hidden rounded-lg px-2 py-4">
                                <h3 class="text-white text-base font-black">Casandra Fullwood</h3>
                                <h3 class="text-white text-sm">Creative Manager, Curatorial & Programming Advisor</h3>
                            </div>
                                <div class="relative text-left lg:text-center overflow-hidden rounded-lg px-2 py-4">
                                <h3 class="text-white text-base font-black">Amanda Nellie</h3>
                                <h3 class="text-white text-sm">Digital Media Director</h3>
                            </div>

                        </div>
                    </div>
                </div>-->

                <div class="max-w-6xl mx-auto py-12 scale-100 p-6 border-black border" style="background-color:#da162f;">
                    <div class="flex flex-col justify-center text-center">
                        <h2 class=" text-xl font-semibold pb-12 text-white uppercase">We know you want to do some good work with us.. Send us a message!</h2>
                        <form action="{{ route('subscribe') }}" method="post">
                            @csrf
                            <style>
                                    .footercustom-input {
                                    border: none;
                                    outline: none;
                                    border-radius: 0;
                                    background:transparent;
                                    Color:#fff;
                                    font-size:12px;
                                    width:100%;
                                    border-bottom: 1px solid #fff;
                                }

                            </style>
                            <div class="lg:grid grid-cols-2 md:grid-cols-2 gap-6">
                                    
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-medium text-white">Name</label>
                                    <input type="text" id="name" name="name" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                </div>

                                
                                <div class="mb-4">
                                    <label for="email" class="block text-sm font-medium text-white">Email</label>
                                    <input type="email" id="email" name="email" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                </div>

                                
                                <!--<div class="mb-4">
                                    <label for="service" class="block text-sm font-medium text-white">Service Interested</label>
                                    <select id="service" name="service" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                        <option value="Creative Management and Development">Creative Management and Development</option>
                                        <option value="Consulting and Advisory">Consulting and Advisory</option>
                                        <option value="Brand Strategy and Marketing">Brand Strategy and Marketing</option>
                                        <option value="Curatorial Advisory Services">Curatorial Advisory Services</option>
                                        
                                    </select>
                                </div>-->

                                
                                <div class="mb-4 ">
                                    <label for="inquiry" class="block text-sm font-medium text-white">Tell us what you are thinking</label>
                                    <textarea id="Inquiry" name="Inquiry" rows="1" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md"></textarea>
                                </div>

                                <div class="mt-6  text-left">
                                    <button type="submit" class="px-4 py-6 underline text-white rounded-md">Contact Us</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>

                <!--<div class="max-w-5xl mx-auto  scale-100 py-16 bg-black rounded-lg">
                    <div class="flex flex-col justify-center  text-center">
                        
                        <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                        <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
                        <h2 class="text-3xl font-semibold  text-orange-500 text-xl font-semibold py-10 ">
                        <a href=""  onclick="Calendly.initPopupWidget({url: 'https://calendly.com/nieleche/30min'});return false;">Schedule time with me</a>
                        </h2>
                    
                    </div>
                </div>-->
                <div class="max-w-6xl mx-auto py-16 scale-100 p-6 border-black border border-b-0" style="background-color:#da162f;">
                    <div class="flex flex-col justify-center text-center">
                        <h2 class=" text-xl font-semibold lg:px-16 py-10 text-white uppercase">We enjoy sharing gists and inside inside information on what we are up to, stories from some good people we know and you might know and some extra gems.</h2>
                        
                    </div>
                </div>
            </div>

            

            <!-- <div x-data="{ openTab: 1 }">
            
                <div class="mb-4">
                    <button @click="openTab = 1" class="w-full text-left py-2 px-4 ">
                        <div class="scale-100 p-6 bg-black dark:bg-orange-500/80 dark:bg-gradient-to-bl from-black-800/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">About</h2>
                            </div>
                        </div>
                    </button>
                    <div x-show="openTab === 1" class="px-4">
                        <div class="scale-100 p-6 bg-black dark:bg-orange-500/80 dark:bg-gradient-to-bl from-black-800/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                IbifiriWari, meaning ‘House of Good Work’ in the Ibani language, serves as a dynamic conduit connecting people, ideas, and projects. Committed to fostering sustainable growth and development within creative ecosystems, we are rooted in the transformative power of culture. Our comprehensive range of services caters to both individuals and organizations, encompassing creative management and development, strategic consulting, brand development, expert advisory, and curatorial services. By providing tailored solutions, we empower our clients and partners to thrive in an ever-evolving creative landscape.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <button @click="openTab = 2" class="w-full text-left py-2 px-4 ">
                        <div class="scale-100 p-6 bg-black  dark:bg-emerald-600/50 dark:bg-gradient-to-bl from-black-800/50  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <h2 class=" text-xl font-semibold text-gray-900 dark:text-white">Services</h2>
                            </div>

                        </div>
                    </button>
                    <div x-show="openTab === 2" class="px-4">
                        <div class="scale-100 p-6 bg-black  dark:bg-emerald-600/50 dark:bg-gradient-to-bl from-black-800/50  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                <strong class="text-base">Creative Management and Development:</strong> At IbifiriWari, we specialize in overseeing the entire lifecycle of creative projects, whether they are individual endeavors or collaborations with organizations and clients. From ideation and conceptualization to planning, execution, and evolution, we provide comprehensive support aimed at nurturing creativity, driving innovation, and bringing artistic visions to fruition.
                                Key features of our services include the development and management of creative professionals. We support individuals in developing their talents, connecting with opportunities, and advancing their careers. As talent representatives, we serve as advocates for our clients' interests. Our services encompass talent scouting, contract negotiation, portfolio management, marketing, and promotion.
                                We also collaborate closely with organizations and clients on creative projects and initiatives, offering our expertise and support to bring their visions to life. Whether working with individual creatives or larger entities, we are dedicated to fostering a thriving creative ecosystem and facilitating meaningful collaborations.
                                </p>
                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                <strong class="text-base">Consulting and Advisory:</strong> IbifiriWari offers strategic guidance, industry expertise, and practical solutions to diverse clients, including:
                                Strategic cultural planning
                                Brand strategy development
                                Cultural consulting
                                Project management
                                Partnership development
                                Policy advocacy and government relations
                                Our services cater to creative professionals, businesses, cultural organizations, and both private and public sector entities. We address regulatory challenges and promote favorable conditions for growth and innovation in the creative sector

                                </p>
                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                    <strong class="text-base">Brand Strategy and Marketing:</strong> Crafting impactful brand strategies and executing targeted marketing campaigns is at the core of what we do at IbifiriWari. Our services are designed to elevate visibility and impacts through:
                                    Brand Identity Development: Collaborating closely with our clients, we define their unique brand identity, encompassing mission, values, voice, and visual elements. Through thorough market research and analysis, we craft brand narratives that resonate with target audiences and set our clients apart from competitors.
                                    Positioning and Differentiation: We assist clients in identifying their competitive advantages and develop strategic positioning to effectively communicate their value proposition to consumers. Leveraging market insights and consumer trends, we ensure our clients' brands stand out in crowded markets and drive preference among their target audience.
                                    Marketing Strategy and Planning: Our team creates customized marketing strategies tailored to each client's specific goals and objectives. From defining target audiences and selecting the most effective channels to setting campaign objectives and KPIs, we develop comprehensive plans to maximize reach, engagement, and conversion.
                                    Creative Campaign Development: We conceptualize and execute creative marketing campaigns that captivate audiences and drive action. From eye-catching visuals and compelling storytelling to interactive experiences and social media activations, we leverage a mix of creative tactics to deliver memorable brand experiences across channels.

                                </p>
                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                    <strong class="text-base">Curatorial Advisory Services:</strong> Our expertise in curatorial practice ensures impactful exhibitions, programs, and cultural initiatives.
                                    <ul class="text-white dark:text-white-400 text-sm leading-relaxed">
                                        <li><strong>Exhibition Curation:</strong> Collaborating closely with artists, institutions and galleries, we develop exhibitions that conveying compelling narratives through carefully selected artworks and immersive design.</li>
                                        <li><strong>Program Curation:</strong> We develop diverse and engaging programs, from lectures, artist talks to workshops, fostering community engagement and enriching the cultural landscape with more opportunities for connection.</li>
                                        <li><strong>Cultural Initiative Curation:</strong> Guiding cultural projects from concept to execution, we provide strategic support to initiatives such as public art installations and community outreach programs, ensuring their success and lasting impact.</li>
                                        <li><strong>Advisory Services:</strong> Beyond curation, we offer strategic guidance on community engagement and planning, drawing on our extensive knowledge and experience to help clients navigate challenges and achieve their goals.</li>
                                    </ul>
                                        <span class="text-white">
                                            Benefit from our deep understanding of art and culture, coupled with a commitment to excellence and innovation in curatorial practice.
                                        </span>
                                    </p>

                                <p class="mt-4 text-white dark:text-white-400 text-sm leading-relaxed">
                                    <strong class="text-lg">Why Choose IbifiriWari</strong> 
                                    <ul class="text-white dark:text-white-400 text-sm leading-relaxed">
                                        <li><strong>Dedicated Expertise:</strong> Our team of experienced professionals brings a wealth of knowledge and passion to every project.</li>
                                        <li><strong>Collaborative Approach:</strong> We believe in the power of collaboration and work closely with our clients to achieve shared goals.</li>
                                        <li><strong>Cultural Relevance:</strong> With a deep understanding of cultural nuances, we ensure that our solutions are authentic and resonant.</li>
                                        <li><strong>Innovative Solutions:</strong> From traditional to cutting-edge, we leverage innovative techniques and approaches to drive results.</li>
                                    </ul>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <button @click="openTab = 3" class="w-full text-left py-2 px-4 ">
                        <div class="scale-100 p-6 bg-black  dark:bg-violet-500/30 dark:bg-gradient-to-bl from-black-800/50  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                            
                                <h2 class=" text-2xl font-semibold text-gray-900 dark:text-white">Get in Touch to learn more about how you can be part of this House of Good Work by working together!</h2>

                            </div>
                        </div>
                    </button>
                    <div x-show="openTab === 3" class="px-4">
                        <div class="scale-100 p-6 bg-black  dark:bg-violet-500/30 dark:bg-gradient-to-bl from-black-800/50  via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div style="width:100%;">
                                <form action="{{ route('subscribe') }}" method="post">
                                @csrf

                                    <style>
                                            .footercustom-input {
                                            border: none;
                                            outline: none;
                                            border-radius: 0;
                                            background:transparent;
                                            Color:#fff;
                                            font-size:12px;
                                            width:100%;
                                            border-bottom: 1px solid #fff;
                                        }

                                    </style>
                                    <div class="grid grid-cols-2 md:grid-cols-2 gap-6">
                                        <div class="mb-4">
                                            <label for="name" class="block text-sm font-medium text-white">Name</label>
                                            <input type="text" id="name" name="name" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                        </div>

                                        <div class="mb-4">
                                            <label for="email" class="block text-sm font-medium text-white">Email</label>
                                            <input type="email" id="email" name="email" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                        </div>

                                        <div class="mb-4">
                                            <label for="service" class="block text-sm font-medium text-white">Service Interested</label>
                                            <select id="service" name="service" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md">
                                                <option value="Creative Management and Development">Creative Management and Development</option>
                                                <option value="Consulting and Advisory">Consulting and Advisory</option>
                                                <option value="Brand Strategy and Marketing">Brand Strategy and Marketing</option>
                                                <option value="Curatorial Advisory Services">Curatorial Advisory Services</option>
                                            
                                            </select>
                                        </div>

                                        <div class="mb-4">
                                            <label for="inquiry" class="block text-sm font-medium text-white">Inquiry</label>
                                            <textarea id="Inquiry" name="Inquiry" rows="4" class="footercustom-input focus:outline-none mt-1 p-2 w-full border rounded-md"></textarea>
                                        </div>
                                    </div>
                                    

                                    <div class="text-left">
                                        <button type="submit" class="px-4 py-2 bg-violet-900 text-white rounded-md">Contact Us</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
    </div>
    <script>
        const textElement = document.getElementById('dynamic-text');
        const texts = [
            "people",
            "ideas",
            "projects"
            // Add more text strings here for additional typing animations
        ];
        let index = 0;
        let charIndex = 0;
        let isDeleting = false;

        function typeText() {
            const currentText = texts[index];
            textElement.textContent = currentText.slice(0, charIndex);

            if (!isDeleting) {
            charIndex++;
            } else {
            charIndex--;
            }

            if (charIndex === currentText.length + 1) {
            isDeleting = true;
            }

            if (charIndex === 0 && isDeleting) {
            isDeleting = false;
            index = (index + 1) % texts.length;
            }

            setTimeout(typeText, isDeleting ? 200 : 300);
        }

        typeText();
    </script>  
</x-app-layout>
