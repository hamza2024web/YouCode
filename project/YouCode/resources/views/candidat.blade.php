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
                    @foreach($question->responses  as $response)
                    <label class="block">
                        <input type="radio" name="response" value="{{ $response->id }}" class="mr-3 hidden">
                        <div class="response-card bg-gray-100 p-4 rounded-lg hover:bg-blue-50 cursor-pointer transition">
                            <span class="font-medium text-gray-700">{{ $response->text }}</span>
                        </div>
                    </label>
                    @endforeach
                </div>
                @endforeach

                <!-- Pagination Navigation -->
                <div class="flex justify-between mt-8">
                    @if($questions->previousPageUrl())
                    <a href="{{ $questions->previousPageUrl() }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-300 transition">Previous</a>
                    @endif

                    @if($questions->nextPageUrl())
                    <a href="{{ $questions->nextPageUrl() }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">Next</a>
                    @endif
                </div>
            </div>

        </div>
    </div>
</body>

</html>