<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css')}}" />
    <title>Tuju Space</title>
</head>

<body>
        <!-- Navigation Bar -->
        <div class="navbar">
            <img src="elements/coldmoo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Locations</a></li>
                    <li><a href="">About Cold Moo</a></li>
                    <li><a href="">FAQ</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="bigcontainer">
        <!-- Home -->
        <div class="home">
            <h1>COLD MOO</h1>
            <div class="overlapboxmarketing">
                <div class="overlapmarketing">
                   
                    <div class="component">
                        <div class="framemark4">
                            <div class="framemark5">
                                <img class="img" src="elements/search.png" />
                                <!-- Replace textwrapmark4 with the select element -->
                                <div class="dropdown">
                                    <div class="textwrapmark4">
                                        <form action="{{ route('findRooms') }}" method="get">

                                            <input type="hidden" name="roomType" id="selectedRoomType" value="hotelRooms">
                                            <select id="outlet" name="outlet">
                                                @foreach($outlets as $singleOutlet)
                                                <option value="{{ $singleOutlet }}">{{ $singleOutlet }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bottom">
                            <div class="framemark">

                                <button type="submit">Find Rooms</button>
                                </form>
                            </div>
                        </div>
                        <div class="result" id="result"></div>
                    </div>
                </div>

                </form>
                <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>