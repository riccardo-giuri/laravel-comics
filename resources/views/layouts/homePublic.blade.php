<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-comics-giuri</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- <TheHeader></TheHeader> --}}
    @include('partials.header')

  <main>
    <div class="jumbotron"></div>

    <div class="comicsContainer">
      <div class="container">
        <div class="row row-cols-6">
          <div
            class="col" 
            v-for="(comicData, i) in comicsData"
            :key="`comic_${i}`"
          >
            {{-- <comicCard :singleComicData="comicData"></comicCard> --}}
          </div>
        </div>
      </div>
    </div>
    
  </main>

  {{-- <TheBlueBanner></TheBlueBanner> --}}
  @include("partials.theBlueIconBanner");

  {{-- <TheFooter></TheFooter> --}}
</template>
</body>
</html>