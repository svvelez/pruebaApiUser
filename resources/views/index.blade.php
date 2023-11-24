<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
</head>





<div class='flex items-center justify-center min-h-screen from-pink-200 via-purple-300 to-blue-500 bg-gradient-to-br'>
    <div class='w-full max-w-lg py-8 flex flex-row items-center justify-center mx-auto bg-[#FFFBFB] rounded-lg shadow-xl'>
        <div class="flex flex-col md:flex-row w-3/4 md:w-5/6 space-x-0 md:space-x-8">

            @foreach($random['results'] as $r)
            <div class="w-full md:w-2/5 flex flex-col items-center justify-center">
                <figure class="w-1/2 md:w-full  rounded-full overflow-hidden">
                    <img class="rounded-full w-600" src="{{$r['picture']['large']}}?auto=compress&cs=tinysrgb&w=600" alt="">
                </figure>
            </div>

            <div class="w-full md:w-3/5 space-y-4 flex flex-col justify-center items-center">

                <div class="flex flex-col justify-center">
                    <h1 class="text-center md:text-left text-2xl font-bold text-purple-700">{{$r['name']['first']. " ".$r['name']['last'] }}</h1>
                </div>

                <hr>
                <div class="flex justify-between ">

                    <div class="text-left">
                        <p class="font-bold"><i class="iconoir-calendar mr-2"></i>
                            <span class="text-xs"> {{$r['dob']['date'] }}</span>
                        </p>

                        <p class="font-bold"><i class="iconoir-birthday-cake mr-2"></i>
                            <span class="text-xs"> {{$r['dob']['age'] }}</span>
                        </p>

                        <p class="font-bold"><i class="iconoir-phone mr-2"></i>
                            <span class="text-xs"> {{$r['cell']}}</span>
                        </p>

                        <p class="font-bold"><i class="iconoir-mail mr-2"></i>
                            <span class="text-xs"> {{$r['email'] }}</span>
                        </p>

                        <p class="font-bold "><i class="iconoir-house-rooms mr-2"></i>
                            <span class="text-xs">
                                {{
                                    $r['location']['street']['number']. " " .
                                    $r['location']['street']['name']. " " .
                                    $r['location']['city']. " " .
                                    $r['location']['state']. " " . 
                                    $r['location']['country']. " " . 
                                    $r['location']['postcode']
                                }}
                            </span>
                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>
    </div>
</div>

</html>