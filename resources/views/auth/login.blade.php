<x-guest-layout>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap');

    /* ── Neutralize Breeze guest wrapper tanpa edit file lain ── */
    body {
        margin: 0 !important;
        padding: 0 !important;
        background: #0a0f1e !important;
    }
    /* Breeze: <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> */
    body > div:first-of-type {
        all: unset !important;
        display: block !important;
        position: fixed !important;
        inset: 0 !important;
    }

    /* ── Background ── */
    .sg-bg {
        position: fixed; inset: 0; z-index: 0;
        background: linear-gradient(135deg, #0a0f1e 0%, #0d1b3e 55%, #091529 100%);
        overflow: hidden; pointer-events: none;
    }
    .sg-bg::before {
        content: '';
        position: absolute; width: 700px; height: 700px; border-radius: 50%;
        background: radial-gradient(circle, rgba(56,189,248,0.11) 0%, transparent 70%);
        top: -200px; right: -150px;
        animation: glow 6s ease-in-out infinite;
    }
    .sg-bg::after {
        content: '';
        position: absolute; width: 550px; height: 550px; border-radius: 50%;
        background: radial-gradient(circle, rgba(99,102,241,0.09) 0%, transparent 70%);
        bottom: -130px; left: -130px;
        animation: glow 8s ease-in-out infinite reverse;
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

    /* ── Full screen center ── */
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

    /* ── Card ── */
    .sg-card {
        width: 100%; max-width: 500px;
        background: rgba(255,255,255,0.035);
        border: 1px solid rgba(255,255,255,0.09);
        border-radius: 24px;
        padding: 2.75rem 2.5rem;
        backdrop-filter: blur(24px);
        box-shadow: 0 0 0 1px rgba(56,189,248,0.05), 0 48px 96px rgba(0,0,0,0.55), inset 0 1px 0 rgba(255,255,255,0.08);
        animation: rise .8s cubic-bezier(.16,1,.3,1) both;
    }
    @keyframes rise {
        from { opacity:0; transform:translateY(28px); }
        to   { opacity:1; transform:translateY(0); }
    }

    .sg-logo-area { text-align:center; margin-bottom:2rem; }
    .sg-icon {
        width:66px; height:66px;
        background:linear-gradient(135deg,#38bdf8,#6366f1);
        border-radius:18px;
        display:inline-flex; align-items:center; justify-content:center;
        margin-bottom:1rem;
        box-shadow:0 8px 32px rgba(56,189,248,0.30);
        position:relative;
    }
    .sg-icon::after {
        content:''; position:absolute; inset:-4px; border-radius:22px;
        background:linear-gradient(135deg,rgba(56,189,248,0.35),rgba(99,102,241,0.35));
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
        font-size:2rem; font-weight:800; color:#fff; line-height:1.1; margin-bottom:.4rem;
    }
    .sg-sub {
        font-size:.82rem; color:rgba(255,255,255,.38);
        font-family:'Plus Jakarta Sans',sans-serif; line-height:1.5;
    }

    .sg-field { margin-bottom:1.15rem; }
    .sg-label {
        display:block; font-size:.72rem; font-weight:700;
        letter-spacing:.08em; text-transform:uppercase;
        color:rgba(255,255,255,.48); margin-bottom:.45rem;
        font-family:'Plus Jakarta Sans',sans-serif;
    }
    .sg-input-wrap { position:relative; }
    .sg-input {
        width:100%; background:rgba(255,255,255,0.055);
        border:1px solid rgba(255,255,255,0.11); border-radius:12px;
        padding:.82rem 1rem .82rem 2.85rem;
        color:#fff; font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.9rem; transition:all .22s; outline:none; box-sizing:border-box;
    }
    .sg-input::placeholder { color:rgba(255,255,255,.2); }
    .sg-input:focus {
        border-color:#38bdf8; background:rgba(56,189,248,0.07);
        box-shadow:0 0 0 3px rgba(56,189,248,0.12);
    }
    .sg-ico {
        position:absolute; left:14px; top:50%; transform:translateY(-50%);
        color:rgba(255,255,255,.28); pointer-events:none;
        display:flex; align-items:center; transition:color .2s;
    }
    .sg-input-wrap:focus-within .sg-ico { color:#38bdf8; }
    .sg-error {
        font-size:.74rem; color:#f87171;
        margin-top:.4rem; font-family:'Plus Jakarta Sans',sans-serif;
    }

    .sg-remember { display:flex; align-items:center; gap:.55rem; margin-bottom:1.5rem; }
    .sg-remember input[type=checkbox] { width:16px; height:16px; accent-color:#38bdf8; cursor:pointer; flex-shrink:0; }
    .sg-remember label { font-size:.8rem; color:rgba(255,255,255,.42); cursor:pointer; font-family:'Plus Jakarta Sans',sans-serif; }

    .sg-btn-login {
        width:100%; padding:.9rem;
        background:linear-gradient(135deg,#38bdf8,#6366f1);
        border:none; border-radius:12px; color:#fff;
        font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.92rem; font-weight:700; cursor:pointer; transition:all .22s;
    }
    .sg-btn-login:hover { transform:translateY(-2px); box-shadow:0 14px 36px rgba(56,189,248,0.36); }
    .sg-btn-login:active { transform:translateY(0); }

    .sg-forgot { text-align:center; margin:.7rem 0; }
    .sg-forgot a { font-size:.78rem; color:rgba(255,255,255,.28); text-decoration:none; font-family:'Plus Jakarta Sans',sans-serif; transition:color .2s; }
    .sg-forgot a:hover { color:#38bdf8; }

    .sg-divider { display:flex; align-items:center; gap:.7rem; margin:.9rem 0; }
    .sg-divider-line { flex:1; height:1px; background:rgba(255,255,255,0.07); }
    .sg-divider span { font-size:.7rem; color:rgba(255,255,255,.22); font-family:'Plus Jakarta Sans',sans-serif; }

    .sg-reg-box {
        background:rgba(255,255,255,0.03);
        border:1px solid rgba(255,255,255,0.07);
        border-radius:12px; padding:1.1rem; text-align:center;
    }
    .sg-reg-box p { font-size:.8rem; color:rgba(255,255,255,.32); font-family:'Plus Jakarta Sans',sans-serif; margin-bottom:.55rem; }
    .sg-btn-reg {
        display:inline-flex; align-items:center; gap:.5rem;
        padding:.65rem 1.4rem;
        border:1px solid rgba(56,189,248,0.38); border-radius:10px;
        color:#38bdf8; font-family:'Plus Jakarta Sans',sans-serif;
        font-size:.84rem; font-weight:600; text-decoration:none;
        background:rgba(56,189,248,0.07); transition:all .22s;
    }
    .sg-btn-reg:hover {
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

        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="sg-card">
            <div class="sg-logo-area">
                <div class="sg-icon">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                        <path d="M2 17l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <div class="sg-platform">Smart School</div>
                <h1 class="sg-title">Smart Guidance</h1>
                <p class="sg-sub">Sistem panduan jurusan kuliah untuk siswa SMA/SMK</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="sg-field">
                    <label class="sg-label" for="email">Email</label>
                    <div class="sg-input-wrap">
                        <input id="email" class="sg-input" type="email" name="email"
                            value="{{ old('email') }}" placeholder="nama@email.com"
                            required autofocus autocomplete="username" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </span>
                    </div>
                    @error('email')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                <div class="sg-field">
                    <label class="sg-label" for="password">Password</label>
                    <div class="sg-input-wrap">
                        <input id="password" class="sg-input" type="password" name="password"
                            placeholder="••••••••" required autocomplete="current-password" />
                        <span class="sg-ico">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </span>
                    </div>
                    @error('password')<p class="sg-error">{{ $message }}</p>@enderror
                </div>

                <div class="sg-remember">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me">Ingat saya di perangkat ini</label>
                </div>

                <button type="submit" class="sg-btn-login">Masuk ke Dashboard</button>

                @if (Route::has('password.request'))
                <div class="sg-forgot">
                    <a href="{{ route('password.request') }}">Lupa password?</a>
                </div>
                @endif

                <div class="sg-divider">
                    <div class="sg-divider-line"></div>
                    <span>atau</span>
                    <div class="sg-divider-line"></div>
                </div>

                <div class="sg-reg-box">
                    <p>Belum memiliki akun admin?</p>
                    <a href="/register" class="sg-btn-reg">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <line x1="19" y1="8" x2="19" y2="14"/>
                            <line x1="22" y1="11" x2="16" y2="11"/>
                        </svg>
                        Daftar sebagai Adminn
                    </a>
                </div>
            </form>
        </div>

        <div class="sg-footer">&copy; {{ date('Y') }} <span>Smart Guidance</span> &mdash; Smart School Platform</div>
    </div>
</div>

<script>
    // Neutralize Breeze wrapper setelah render
    (function(){
        var wrap = document.body.querySelector('div.min-h-screen, body > div:first-of-type');
        if(wrap && !wrap.classList.contains('sg-screen') && !wrap.classList.contains('sg-bg')){
            wrap.style.cssText = 'all:unset;display:block;position:fixed;inset:0;';
        }
    })();
</script>

</x-guest-layout>