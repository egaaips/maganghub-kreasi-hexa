<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Join Us</title>
</head>
<body>
    <div class="container">
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        
        <form action="{{ route('welcome') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="male" name="gender" value="male" required>
                        <label for="male">Male</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="female" name="gender" value="female" required>
                        <label for="female">Female</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="other_gender" name="gender" value="other" required>
                        <label for="other_gender">Other</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <select id="nationality" name="nationality" required>
                    <option value="">Select Nationality</option>
                    <option value="indonesian">Indonesian</option>
                    <option value="malaysian">Malaysian</option>
                    <option value="american">American</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label>Language Spoken:</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="bahasa" name="languages[]" value="bahasa">
                        <label for="bahasa">Bahasa Indonesia</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="english" name="languages[]" value="english">
                        <label for="english">English</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="other_lang" name="languages[]" value="other">
                        <label for="other_lang">Other</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" rows="6"></textarea>
            </div>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>