<div>
    <fieldset>
        <legend>User Form</legend>
        <form action="/submit-user-data" method="post">
            @csrf
            <div>
                <label for="name">Name</label><br />
                <input type="text" name="name" id="name" value="{{ old('name') }}" />
                <p style="color:red;">
                    @error('name')
                        {{ $message }}
                    @enderror
                </p>
            </div><br />
            <div>
                <label for="email">Email</label><br />
                <input type="email" name="email" id="email" value="{{ old(key: 'email') }}" />
                <p style="color:red;">
                    @error('email')
                        {{ $message }}
                    @enderror
                </p>
            </div><br />
            <div>
                <label for="password">Password</label><br />
                <input type="password" name="password" id="password" value="{{ old('password') }}" />
                <p style="color:red;">
                    @error('password')
                        {{ $message }}
                    @enderror
                </p>
            </div><br />
            <div>
                <label for="date_of_birth">Date of Birth</label><br />
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" />
                <p style="color:red;">
                    @error('date_of_birth')
                        {{ $message }}
                    @enderror
                </p>
            </div><br />
            <div>
                <label for="language">Language</label><br />
                <select name="language">
                    <option value="bengali">Bengali</option>
                    <option value="english">English</option>
                    <option value="urdu">Urdu</option>
                </select>
            </div><br />
            <div>
                <label for="pLanguages">Language</label><br />
                <select name="pLanguages[]" multiple>
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Python">Python</option>
                </select>
            </div><br />
            <div>
                <label for="gender">Gender</label><br />
                <input type="radio" name="gender" id="gender" value="male" /> Male
                <input type="radio" name="gender" id="gender" value="female" /> Female
            </div><br />
            <div>
                <label for="bio">Bio</label><br />
                <textarea name="bio" id="bio"></textarea>
            </div><br />
            <div>
                <input type="checkbox" name="agreed" id="agreed" /> Agree with Terms
            </div><br />
            <button type="submit">Click</button>
        </form>
    </fieldset>
</div>