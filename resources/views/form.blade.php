<html>
    <head>
        <title>
            Form nya kakaaa
        </title>
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up From</h3>
        <form action="/welcome" method = "POST">
            @csrf
            <p>First Name:</p>
            <input type="text" id="first_name" name="first_name"><br>
            <p>Last Name:</p>
            <input type="text" id="last_name" name="last_name"><br>
            
            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label>Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label>Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label>Other</label><br>

            <p>Nationality</p>
            <select id="nationality" name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="malaysian">Malaysian</option>
                <option value="japanese">Japanese</option>
            </select><br>

            <p>Language Spoken:</p>
            <input type="checkbox" id="bahasa" name="bahasa" value="Bahasa">
            <label for="bahasa"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="english" value="english">
            <label for="english"> English</label><br>
            <input type="checkbox" id="other" name="other" value="other">
            <label for="other"> Other</label><br>

            <p>Bio:</p>
            <textarea name="bio" id="bio" rows="10" cols="30"></textarea><br><br>

            <input type="submit" value="Submit">
        </form>    
    </body>
</html>