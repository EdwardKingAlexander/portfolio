<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rocky.css') }}">

    <style>

        #portfolio-top {
            background-image: linear-gradient(to bottom, rgba(78,78,79, 0.35) 0%, rgba(46,46,47,0.40) 50%, rgba(0,0,0, 1) 100%), url('/img/portfolio-background.jpg');
            background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
        }

        #consult {
            background-image: linear-gradient(to bottom, rgba(78,78,79, 0.35) 0%, rgba(46,46,47,0.40) 50%, rgba(0,0,0, 1) 100%), url('/img/shaking-hands.jpg');
            background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
        }

        #arrow {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(0.5);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
            }

            100% {
                transform: scale(0.5);
            }
        }
    </style>
    
    <title>Document</title>
</head>
<body  class="bg-blue-400">

    <div id="portfolio-top" class="flex items-center justify-center h-screen">
        <div class="text-center text-white">
            <h1 class="text-5xl">Our Portfolio</h1><br>
            <p class="text-2xl">Scroll down to see our work</p>
            <br>

            <div class="block">
                <a id="smooth-scroll" href="#project-1">
                    <svg id="arrow" style="height:64px; width:64px; margin:auto;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                </a>
            </div>
        </div>
    </div>

    
    
    <div style="scroll-behavior: smooth;" id="project-1" class="grid h-auto grid-cols-2 gap-4 p-10 text-blue-400 bg-white justify-items-center">
     
        

        <div class="w-1/2 col-span-1 mx-auto my-auto">
        <h2 class="text-4xl text-left">Absolutely Clear Window Cleaning LLC</h2>
        </div>

        <div class="justify-center col-span-1">
            <img 
            class="rounded" 
            src="{{ asset('/img/chuck.gif') }}" 
            alt="">
        </div>

        <hr class="text-blue-400">

        <div class="w-4/5 col-span-2">
            <p class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt facilis odit sequi provident nesciunt earum optio, necessitatibus exercitationem fugiat distinctio vitae eum ipsa dicta dolore hic recusandae magnam commodi? Ipsum.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error ab, dolorem provident alias aliquid tenetur laborum excepturi ratione. Laborum ad deserunt praesentium, fugit sapiente animi aliquam veniam voluptate omnis delectus?</p>
        </div>
    </div>


    
    <div class="grid h-auto grid-cols-2 gap-4 p-10 text-white bg-blue-400 justify-items-center">
     
        

        <div class="w-1/2 col-span-1 mx-auto my-auto">
            <h2 class="text-4xl text-left">Khan Industrial Supply LLC </h2>
        </div>

        <div class="justify-center col-span-1">
            <img 
            class="rounded" 
            src="{{ asset('/img/chuck.gif') }}" 
            alt="">
        </div>

        <hr class="text-white">

        <div class="w-4/5 col-span-3">
            <p class="text-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt facilis odit sequi provident nesciunt earum optio, necessitatibus exercitationem fugiat distinctio vitae eum ipsa dicta dolore hic recusandae magnam commodi? Ipsum.lorem Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error ab, dolorem provident alias aliquid tenetur laborum excepturi ratione. Laborum ad deserunt praesentium, fugit sapiente animi aliquam veniam voluptate omnis delectus?</p>
        </div>
    </div>

 

    <div id="consult" class="flex items-center justify-center h-screen bg-white ">
        <div>
        <a href="{{ url('/schedule') }}" class="p-5 text-6xl text-center text-white underline bg-gray-900 rounded hover:text-blue-600">
                Request a Consultation
            </a>
        </div>
    </div>
    
    <div style="position:fixed; bottom:15px; right:15px; height:64px; width:64px;" class="p-3 text-center bg-blue-400 rounded hover:bg-blue-600">
    <a class="text-white" href="{{ url('/') }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
              </svg>
        </a>
    </div>
    

    <script>
        let scroll = document.getElementById('smooth-scroll');
        let project = document.getElementById('project-1');

        scroll.addEventListener('click', function(){
            project.scrollIntoView({
                block: "start",
                inline: "nearest",
                behavior: "smooth"
            });
        });
    </script>



</body>
</html>
