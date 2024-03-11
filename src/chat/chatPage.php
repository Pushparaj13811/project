<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../output.css">
    <style>
        body {
            background-color: #f0f2f5;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .chat-sidebar {
            flex: 0 0 300px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            margin-left: 20px;
            margin-left: 80px;

        }

        .chat-sidebar ul {
            padding-left: 50px;
        }

        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .chat-messages {
            flex: 1;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }



        .message {
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            max-width: 70%;
        }

        .message.sent {
            margin-left: auto;
            background-color: #007bff;
            color: #fff;
        }

        .message.received {
            background-color: #f1f0f0;
        }

        .chat-input {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 10px;
            margin-right: 20px;
            background-color: #fff;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            bottom: 0;
        }

        .chat-input input[type="text"] {
            flex: 1;
            margin-right: 10px;
            padding: 10px;
            border: none;
            border-radius: 20px;
            outline: none;
        }

        .chat-input button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .chat-sidebar,
            .chat-messages {
                width: auto;
                margin: 10px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="chat-sidebar">
            <h2 class="text-lg font-semibold text-center py-4 bg-blue-700 text-white">Users/Friends</h2>
            <ul>
                <li class="py-2">User 1</li>
                <li class="py-2">User 2</li>
                <li class="py-2">User 3</li>
                <!-- Add more users/friends as needed -->
            </ul>
        </div>
        <div class="chat-container">


            <div class="chat-messages">
                <h2 class="text-lg font-semibold text-center py-4 bg-blue-700 text-white">Chat</h2>
                <!-- Sample Chat Messages -->
                <div class="message sent">
                    Hello there!
                </div>
                <div class="message received">
                    Hi! How are you?
                </div>
                <!-- Add more chat messages as needed -->

                <!-- Chat Input -->
            </div>
            <div class="chat-input">
                <input type="text" placeholder="Type your message..." class="border rounded-lg p-2">
                <button>Send</button>
            </div>
        </div>
    </div>
</body>

</html>