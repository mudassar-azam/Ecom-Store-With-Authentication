<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
}

body {
    background: linear-gradient(135deg, #3498db, #2c3e50);
    color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    width: 400px;
    padding: 2rem;
    text-align: center;
}

.login-container h1 {
    margin-bottom: 1rem;
    font-size: 1.8rem;
    font-weight: 700;
    color: #2c3e50;
}

.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container input {
    margin-bottom: 1.5rem;
    padding: 0.9rem 1.2rem;
    border: 1px solid #dcdfe3;
    border-radius: 8px;
    font-size: 1rem;
    color: #333;
}

.login-container input:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

.login-container button {
    background-color: #3498db;
    color: white;
    padding: 0.9rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-container button:hover {
    background-color: #2c80b4;
}
.error-message {
    color: #e74c3c;
    font-size: 0.875rem;
    margin-top: -1rem;
    margin-bottom: 1rem;
    text-align: left;
    display: block;
}
</style>

<div class="login-container">
    <h1>{{ __('Register') }}</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input id="name" type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
        @error('name')
        <span class="error-message">{{ $message }}</span>
        @enderror

        <input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
        @error('email')
        <span class="error-message">{{ $message }}</span>
        @enderror

        <input id="password" type="password" name="password" placeholder="Password" required>
        @error('password')
        <span class="error-message">{{ $message }}</span>
        @enderror

        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm Password" required>

        <button type="submit">{{ __('Register') }}</button>
    </form>
</div>
