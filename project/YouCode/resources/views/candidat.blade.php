<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouCode - Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Quiz Header -->
            <div class="bg-blue-600 text-white p-6">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-2xl font-bold">Programming Fundamentals Quiz</h1>
                        <p class="text-blue-100">Test your coding knowledge</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center">
                            <i class="fas fa-question-circle mr-2"></i>
                            <span id="questionCounter">1/10</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quiz Content -->
            <div id="quizContainer" class="p-8">
                @foreach($questions as $question)
                <!-- Display Question -->
                <h2 id="questionText" class="text-xl font-semibold text-gray-800 mb-6">{{ $question->question }}</h2>

                <!-- Display Responses -->
                <div id="responseOptions" class="space-y-4">
                    @foreach($question->responses as $response)
                    <form action="/storeTheResponse" method="post">
                        @csrf
                        <input type="hidden" name="question_id" value="{{ $question->id }}">
                        <input type="hidden" name="candidat_id" value="{{ $user->id }}">
                        <input type="hidden" name="response_id" value="{{ $response->id }}">
                        <button type="submit" class="response-card w-full p-4 rounded-lg transition-all duration-300 bg-cyan-500 text-white font-semibold shadow-md hover:bg-cyan-600 hover:shadow-lg active:bg-cyan-700 focus:outline-none focus:ring focus:ring-cyan-300">
                            <span class="font-medium">{{ $response->text }}</span>
                        </button>
                    </form>

                    @endforeach
                </div>
                @endforeach

                <!-- Pagination Navigation -->
                <div class="flex justify-between mt-8">
                    @if($questions->nextPageUrl())
                    <a href="{{ $questions->nextPageUrl() }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Next</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</body>

</html>