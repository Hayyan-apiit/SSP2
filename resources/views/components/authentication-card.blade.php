<div class="min-h-screen flex flex-col sm:justify-center items-center bg-cover bg-center" style="background-image: url('user/images/denim.jpg');">

    <div class="mb-4">
        <!-- Custom logo styling -->
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

        <!-- Custom slot styling -->
        <div class="mb-4 text-xl font-semibold text-gray-700">
            Sri Lux Fashion
        </div>

        {{ $slot }}

        <!-- Additional styling for the form elements -->
        <style>
            input[type="text"],
            input[type="password"],
            input[type="email"] {
                width: 100%;
                padding: 0.5rem;
                margin-bottom: 1rem;
                border: 1px solid #ccc;
                border-radius: 0.25rem;
                box-sizing: border-box;
            }

            button {
                background-color: #4caf50;
                color: white;
                padding: 0.5rem 1rem;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>

    </div>
</div>
