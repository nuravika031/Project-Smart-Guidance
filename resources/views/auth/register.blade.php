<x-guest-layout>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap');

    html, body {
        margin: 0 !important;
        padding: 0 !important;
        background: #0a0f1e !important;
    }
    body > div:first-of-type {
        all: unset !important;
        display: block !important;
        position: fixed !important;
        inset: 0 !important;
    }

    .sg-bg {
        position: fixed; inset: 0; z-index: 0;
        background: linear-gradient(135deg, #0a0f1e 0%, #0d1b3e 55%, #091529 100%);
        overflow: hidden; pointer-events: none;
    }
    .sg-bg::before {
        content: '';
        position: absolute; width: 700px; height: 700px; border-radius: 50%;
        background: radial-gradient(circle, rgba(99,102,241,0.11) 0%, transparent 70%);
        top: -200px; left: -150px;
        animation: glow 7s ease-in-out infinite;
    }
    .sg-bg::after {
        content: '';
        position: absolute; width: 550px; height: 550px; border-radius: 50%;
        background: radial-gradient(circle, rgba(56,189,248,0.09) 0%, transparent 70%);
        bottom: -130px; right: -130px;
        animation: glow 9s ease-in-out infinite reverse;
    }
    @keyframes glow {
        0%,100% { transform:scale(1); opacity:.7; }
        50%      { transform:scale(1.14); opacity:1; }
    }
    .sg-grid {
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(56,189,248,0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(56,189,248,0.04) 1px, transparent 1px);
        background-size: 52px 52px;
    }

    .sg-screen {
        position: fixed !important;
        inset: 0 !important;
        z-index: 10;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 1.5rem;
        overflow-y: auto;
    }

    .sg-card {
        width: 100%; max-width: 500px;
        background: rgba(255,255,255,0.035);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 24px;
        padding: 2.5rem 2.5rem;
        backdrop-filter: blur(24px);
        box-shadow: 0 0 0 1px rgba(56,189,248,0.05), 0 48px 96px rgba(0,0,0,0.55), inset 0 1px 0 rgba(255,255,255,0.08);
        animation: rise .8s cubic-bezier(.16,1,.3,1) both;
    }
    @keyframes rise {
        from { opacity:0; transform:translateY(28px); }
        to   { opacity:1; transform:translateY(0); }
    }

    .sg-logo-area { text-align:center; margin-bottom:1.75rem; }
    .sg-icon {
        width:60px; height:60px;
        background:linear-gradient(135deg,#6366f1,#38bdf8);
        border-radius:16px;
        display:inline-flex; align-items:center; justify-content:center;
        margin-bottom:.9rem;
        box-shadow:0 8px 32px rgba(99,102,241,0.35);
        position:relative;
    }
    .sg-icon::after {
        content:''; position:absolute; inset:-4px; border-radius:20px;
        background:linear-gradient(135deg,rgba(99,102,241,0.35),rgba(56,189,248,0.35));
        z-index:-1; animation:ring 2s ease-in-out infinite;
    }
    @keyframes ring {
        0%,100%{opacity:.35;transform:scale(1);}
        50%{opacity:.70;transform:scale(1.05);}
    }
    .sg-platform {
        font-size:.68rem; font-weight:700; letter-spacing:.22em;
        text-transform:uppercase; color:#38bdf8;
        font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:.3rem;
    }
    .sg-title {
        font-family:'Playfair Display',serif;
        font-size:1.8rem; font-weight:800; color:#fff; line-height:1.1; margin-bottom:.35rem;
    }
    .sg-sub {
        font-size:.8rem; color:rgba(255,255,255,.38);
        font-family:'Plus Jakarta Sans',sans-serif; line-height:1.5;
    }

    .sg-field { margin-bottom:1rem; }
    .sg-label {
        display:block; font-size:.72rem; font-weight:700;
        letter-spacing:.08em; text-transform:uppercase;
        color:rgba(255,255,255,.48); margin-bottom:.4rem;
        font-family:'Plus Jakarta Sans',sans-serif;
    }
    .sg-input-wrap { position:relative; }
    .sg-input {
        width:100%; background:rgba(255,255,255,0.055);
        border:1px solid rgba(255,255,255,0.11); border-radius:12px;
        padding:.78rem 1rem .78rem 2.85rem;
        color:#fff; font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.9rem; transition:all .22s; outline:none; box-sizing:border-box;
    }
    .sg-input::placeholder { color:rgba(255,255,255,.2); }
    .sg-input:focus {
        border-color:#6366f1; background:rgba(99,102,241,0.07);
        box-shadow:0 0 0 3px rgba(99,102,241,0.13);
    }
    .sg-ico {
        position:absolute; left:14px; top:50%; transform:translateY(-50%);
        color:rgba(255,255,255,.28); pointer-events:none;
        display:flex; align-items:center; transition:color .2s;
    }
    .sg-input-wrap:focus-within .sg-ico { color:#6366f1; }
    .sg-error {
        font-size:.74rem; color:#f87171;
        margin-top:.35rem; font-family:'Plus Jakarta Sans',sans-serif;
    }

    .sg-btn-register {
        width:100%; padding:.88rem;
        background:linear-gradient(135deg,#6366f1,#38bdf8);
        border:none; border-radius:12px; color:#fff;
        font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.92rem; font-weight:700; cursor:pointer; transition:all .22s;
        margin-top:.5rem;
    }
    .sg-btn-register:hover { transform:translateY(-2px); box-shadow:0 14px 36px rgba(99,102,241,0.36); }
    .sg-btn-register:active { transform:translateY(0); }

    .sg-divider { display:flex; align-items:center; gap:.7rem; margin:.9rem 0; }
    .sg-divider-line { flex:1; height:1px; background:rgba(255,255,255,0.07); }
    .sg-divider span { font-size:.7rem; color:rgba(255,255,255,.22); font-family:'Plus Jakarta Sans',sans-serif; }

    .sg-login-box {
        background:rgba(255,255,255,0.03);
        border:1px solid rgba(255,255,255,0.07);
        border-radius:12px; padding:1rem;
        text-align:center;
    }
    .sg-login-box p { font-size:.8rem; color:rgba(255,255,255,.32); font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:.5rem; }
    .sg-btn-login {
        display:inline-flex; align-items:center; gap:.5rem;
        padding:.62rem 1.4rem;
        border:1px solid rgba(56,189,248,0.38); border-radius:10px;
        color:#38bdf8; font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.84rem; font-weight:600; text-decoration:none;
        background:rgba(56,189,248,0.07); transition:all .22s;
    }
    .sg-btn-login:hover {
        background:rgba(56,189,248,0.14); border-color:rgba(56,189,248,0.65);
        color:#7dd3fc; transform:translateY(-1px); box-shadow:0 6px 20px rgba(56,189,248,0.16);
    }

    .sg-footer {
        text-align:center; margin-top:1.25rem;
        font-size:.68rem; color:rgba(255,255,255,.15);
        font-family:'Plus Jakarta Sans',sans-serif;
    }
    .sg-footer span { color:rgba(56,189,248,.4); }
</style>

<div class="sg-bg"><div class="sg-grid"></div></div>

<div class="sg-screen">
    <div style="width:100%;max-width:500px;">
        <div class="sg-card">

            {{-- Logo --}}
            <div class="sg-logo-area">
                <div class="sg-icon">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                        <circle cx="9" cy="7" r="4"/>
                        <line x1="19" y1="8" x2="19" y2="14"/>
                        <line x1="22" y1="11" x2="16" y2="11"/>
                    </svg>
                </div>
                <div class="sg-platform">Smart School</div>
                <h1 class="sg-title">Daftar Admin</h1>
                <p class="sg-sub">Buat akun admin baru untuk Smart Guidance</p>
            </div>

            {{-- Form --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="sg-field">
                    <label class="sg-label" for="name">Nama Lengkap</label>
                    <div class="sg-input-wrap">
                        <input id="name" class="sg-input" type="text" name="name"
                            value="{{ old('name') }}" placeholder="Nama lengkap"
                            required autofocus autocomplete="name" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                                <circle cx="12" cy="7" r="4"/>
                            </svg>
                        </span>
                    </div>
                    @error('name')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                {{-- Email --}}
                <div class="sg-field">
                    <label class="sg-label" for="email">Email</label>
                    <div class="sg-input-wrap">
                        <input id="email" class="sg-input" type="email" name="email"
                            value="{{ old('email') }}" placeholder="nama@email.com"
                            required autocomplete="username" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </span>
                    </div>
                    @error('email')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                {{-- Password --}}
                <div class="sg-field">
                    <label class="sg-label" for="password">Password</label>
                    <div class="sg-input-wrap">
                        <input id="password" class="sg-input" type="password" name="password"
                            placeholder="Minimal 8 karakter"
                            required autocomplete="new-password" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </span>
                    </div>
                    @error('password')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                {{-- Confirm Password --}}
                <div class="sg-field">
                    <label class="sg-label" for="password_confirmation">Konfirmasi Password</label>
                    <div class="sg-input-wrap">
                        <input id="password_confirmation" class="sg-input" type="password"
                            name="password_confirmation"
                            placeholder="Ulangi password"
                            required autocomplete="new-password" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 12l2 2 4-4"/>
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </span>
                    </div>
                    @error('password_confirmation')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                {{-- Submit --}}
                <button type="submit" class="sg-btn-register">Buat Akun Admin</button>

                {{-- Divider --}}
                <div class="sg-divider">
                    <div class="sg-divider-line"></div>
                    <span>atau</span>
                    <div class="sg-divider-line"></div>
                </div>

                {{-- Back to login --}}
                <div class="sg-login-box">
                    <p>Sudah memiliki akun admin?</p>
                    <a href="{{ route('login') }}" class="sg-btn-login">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/>
                            <polyline points="10 17 15 12 10 7"/>
                            <line x1="15" y1="12" x2="3" y2="12"/>
                        </svg>
                        Masuk sebagai Admin
                    </a>
                </div>

            </form>
        </div>

        <div class="sg-footer">&copy; {{ date('Y') }} <span>Smart Guidance</span> &mdash; Smart School Platform</div>
    </div>
</div>

<script>
    (function(){
        var wrap = document.body.querySelector('div.min-h-screen, body > div:first-of-type');
        if(wrap && !wrap.classList.contains('sg-screen') && !wrap.classList.contains('sg-bg')){
            wrap.style.cssText = 'all:unset;display:block;position:fixed;inset:0;';
        }
    })();
</script>

</x-guest-layout>