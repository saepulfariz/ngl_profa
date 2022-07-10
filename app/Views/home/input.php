<?= $this->extend('templates/index'); ?>


<?= $this->section('head'); ?>
<style>
    .pulse {
        animation: pulse 1s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        70% {
            transform: scale(0.9);
        }

        100% {
            transform: scale(1);
        }
    }

    /* .bottom-container {
        bottom: env(safe-area-inset-bottom);
        position: absolute;
        width: 85%;
        max-width: 640px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding-left: 16px;
        padding-right: 16px;
        padding-bottom: 32px;
        padding-top: 32px;
        text-align: center;
        left: 0;
        right: 0;
        margin: 0 auto;
        z-index: 1;
    } */

    .pfp-container {
        border-radius: 300px;
        width: 40px;
        height: 40px;
        background-color: #F1F1F1;
        background-image: url('https://ngl.link/images/profilePlaceholder.png');
        background-position: center center;
        background-size: 16px 16px;
        background-repeat: no-repeat;
        overflow: hidden;
        position: relative;
        flex-shrink: 0;
        display: block;
    }

    .textarea-container {
        width: 100%;
        margin-bottom: 10px;
        background-color: rgba(255, 255, 255, 0.4);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(6px);
        border-radius: 0 0 24px 24px;
        position: relative;
        -webkit-appearance: none;
    }

    .top-left-corner {
        position: absolute;
        top: 0;
        left: 0;
        background: url('https://ngl.link/images/top-left-corner.svg');
        width: 24px;
        height: 24px;
    }

    .top-right-corner {
        position: absolute;
        top: 0;
        right: 0;
        background: url('https://ngl.link/images/top-right-corner.svg');
        width: 24px;
        height: 24px;
    }

    textarea {
        width: 100%;
        padding: 18px 24px;
        height: 140px;
        box-sizing: border-box;
        font-size: 20px;
        font-weight: 600;
        border: none;
        outline: none;
        background-color: transparent;
    }

    textarea::placeholder {
        color: rgba(0, 0, 0, 0.25);
    }

    .dice-button {
        position: absolute;
        bottom: 26px;
        right: 26px;
        font-size: 16px;
        background-color: rgba(255, 255, 255, 0.25);
        padding: 8px;
        border-radius: 100px;
        width: 36px;
        height: 36px;
        text-align: center;
        touch-action: manipulation;

        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<?= $this->endSection('head'); ?>
<?= $this->section('content'); ?>


<div class="container bg-transparent">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center h-100" style="">

            <div class="" style="height: 100vh;">
                <div class="px-0 mt-5">
                    <form action="" method="post">

                        <div class="d-flex flex-row bg-white p-3 " style="border-radius: 30px 30px 0 0;">
                            <!-- <div class="rounded-circle" style="background-color: #F1F1F1;width: 40px; height: 40px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-instagram  " viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </div> -->
                            <div class="pfp-container"></div>
                            <div class="d-flex flex-column text-start ms-2" style="font-size: 14px;">
                                <div>@<?= $name; ?></div>
                                <div class="fw-bold">send me anonymous messages!</div>
                            </div>
                        </div>
                        <div class="textarea-container">
                            <div class="top-right-corner"></div>
                            <div class="top-left-corner"></div>
                            <div class="dice-button">🎲</div><textarea placeholder="send me anonymous messages…" name="question" autocomplete="off"></textarea>
                        </div>
                        <p class="text-white" style="font-size: 14px;">🔒 100% anonymous</p>
                        <button class="submit btn py-3 px-5 fw-bold btn-dark rounded-pill w-100" type="submit" style="">Send!</button>

                        <div class="fixed-bottom mb-3 bottom-container" style="margin-top: 0px;">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 mx-2">
                                    <p class="download-prompt text-white" style="font-size: 16px;">👇 <span class="clickCount">3304</span> people just tapped the button👇 </p>
                                    <a href="<?= base_url(); ?>/home" class="btn py-3 px-5 fw-bold btn-dark rounded-pill pulse w-100" style="font-size: 20px;">Get own messages</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection('content'); ?>
<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('.form').submit(function(e) {
            $('.submit').attr('disabled', true)
        })

        window.addEventListener("pageshow", function(event) {
            var historyTraversal = event.persisted ||
                (typeof window.performance != "undefined" &&
                    window.performance.navigation.type === 2);
            if (historyTraversal) {
                // Handle page restore.
                $('.submit').attr('disabled', false)
                $('textarea').val('')
                $('.submit').hide()
                $('.bottom-container').show()
            }
        });

        $('.submit').hide()

        const userAgent = navigator.userAgent || navigator.vendor || window.opera
        if (/android/i.test(userAgent)) {
            $('.download-link').attr('href', 'https://play.google.com/store/apps/details?id=com.nglreactnative')
        }

        $('textarea').focus(function() {
            $('.bottom-container').hide()
        })

        $('textarea').blur(function() {
            $('.bottom-container').show()
        })

        $('textarea').on('change keyup paste', function(e) {
            if (e.target.value == '') {
                $('.submit').hide()
            } else {
                $('.submit').show()
                $('.bottom-container').hide()
            }
        });

        const randomQuestions = [
            "a secret you kept from your parents 👀",
            "ain't no way",
            "any pets?",
            "are you a back seat driver?",
            "are you close with your parents?",
            "are you gonna get a tat",
            "are you judgemental",
            "are you looking to date someone rn",
            "are you straight?",
            "are you talking to anyone?",
            "Biggest red flags for a girl?",
            "biggest red flags in a guy?",
            "biggest regret?",
            "body count 😳?",
            "can we be besties",
            "craziest pickup line that worked?",
            "did you have an imaginary friend?",
            "did you watch game of thrones?",
            "do u have a dog?",
            "do u use pronouns",
            "do you even like school?",
            "do you have a middle name?",
            "do you have any cute friends for me lmao",
            "do you have any piercings?",
            "do you have trust issues?",
            "do you love ur life? x",
            "do you snore?",
            "do you speak another language?",
            "do you want kids evenutally?",
            "dogs or cats?",
            "dont leave me on opened",
            "dream job?",
            "ever gone skinny dipping?",
            "everything ok?",
            "favorite food?",
            "favorite movie?",
            "Favorite movie/ tv series rn",
            "favorite show rn?",
            "have any netflix recomendations??",
            "have any netlix recomendations?",
            "have u seen breaking bad",
            "have you done drugs 🍃",
            "Have you ever been fired from a job?",
            "have you ever cheated, you gotta be honest lol",
            "have you ever cried during a movie 🤷",
            "have you ever given a hickey?",
            "have you ever gotten in a fist fight?",
            "have you ever had any surgery",
            "have you ever thought about being bi",
            "have you ever watched harry potter?",
            "hottest sport? 🥵",
            "how are you feeling today :)",
            "How are you today ❤️‍🩹",
            "how big of nerd are you 1 to 10",
            "how many exes do you have?",
            "how many hours of sleep you get last night?",
            "how many kids do you want to have",
            "how many selfies do you take a day?",
            "how many stuffed animals you own?",
            "how old are you again?",
            "how old do u wanna be whe u get married?",
            "how tall are u",
            "how tall are you??",
            "how tall r u",
            "How's you day going ??!",
            "I have a crush on you",
            "I have covid, any show recomendations?",
            "I know what you did",
            "i love uuuuuu!!",
            "i miss you",
            "i really like you",
            "insta?",
            "introvert or extrovert?",
            "is it true???",
            "is ngl the best app tho :)",
            "kanye is the best 😤 change my mind",
            "name all your exes",
            "netflix and chill? 👀",
            "not gonna judge but why...",
            "one friend ur thankful for...",
            "one thing you can't survive without?",
            "opinion on birds?",
            "personality or looks?",
            "please give me pickup lines that always work",
            "should i be honest with you on here?",
            "shout me out",
            "single?",
            "spill some tea",
            "spill the tea on your first kiss.",
            "tell me a funny joke",
            "tell me a random fact",
            "the longest time you've ever gone without showering?",
            "the most embarrassing thing you've ever done?",
            "the weirdest place you've ever gone to the bathroom?",
            "the weirdest thing you've ever eaten?",
            "The weirdest trend you've done",
            "the worst advice you've ever given?",
            "the worst date you've ever been on?",
            "the worst food you ever eaten?",
            "the worst pick up line you've ever heard?",
            "the worst trouble you go into as a kid?",
            "u busy this weekend?",
            "uh what did you eat for breakfast?",
            "we should talk more",
            "what are ur plans this weekend?",
            "what are you wearing?",
            "what color is your room?",
            "what did you dream about last night?",
            "what have you gotten detention for?",
            "What is your shoe size?",
            "what music do you listen to",
            "what phone do you have?",
            "what time did you fall asleep last night?",
            "what time do you usually go to bed?",
            "what was the best day so far this year?",
            "what was ur worst day ever",
            "what was your favorite show when you were a kid?",
            "What's ur fav brand?? <3",
            "whats in ur spotify top songs",
            "whats the last thing you ate?",
            "whats the stupidest thing you thought as a kid?",
            "whats ur fav book",
            "whats ur fav drink",
            "whats ur fav food",
            "whats ur fav movie",
            "whats ur fav song",
            "whats ur fav tv show",
            "whats ur favorite food?",
            "whats ur oritenation",
            "whats your biggest insecurity 🤔",
            "whats your dream house",
            "whats your fav sport?",
            "whats your number one song on spotify",
            "whats your sign",
            "when was the last time you cried?",
            "when was the last time you lied?",
            "when was the last time you wet the bed?",
            "when was your first kiss?",
            "where are you from...?",
            "where are your parents from?",
            "who are your best girl friends",
            "who do you have pinned on imessage",
            "who do you miss the most",
            "who do you text the most?",
            "who was the last dude you texted?",
            "who was the last girl you texted?",
            "who was your crush in middle school lmao",
            "who was your first kiss?",
            "who you tryna get with 👀",
            "who you tryna vote for in 2024 👀",
            "whos the last person you texted?",
            "whos ur best friend",
            "whos ur crush?",
            "whos ur worst enemy 😈",
            "whos your last ig search?",
            "whos your last snap from?",
            "why doesnt my crush like me back 😭",
            "worst movie youve ever watched?",
            "would you ever be fwb",
            "would you ever get with me? ~ N",
            "would you leave your SO for a celeb",
            "would you say yes if i asked you out - A",
            "wyd",
            "wyd tomorrow",
            "yo stop leaving me on read",
            "you a homie",
            "you ever think about having the ability to teleport?",
            "you got a sneaky link?",
            "you have good style",
            "you lit",
            "you should get a tattoo",
            "you should post more selfies 💕",
            "you wild for what you did",
            "you're best friend",
            "Your biggest fear?",
            "your biggest insecurity?",
            "your celeb crush?",
            "your favorite hobby?",
            "your favorite part of your body?",
            "your last song on your spotify?",
            "your really attractive",
            "your worst habit?",
            "your worst personality characteristic?",
            "youre cute"
        ]

        $('.dice-button').click(function(e) {
            console.log('wat')
            // Set textarea text to a random question
            const randomQuestion = randomQuestions[Math.floor(Math.random() * randomQuestions.length)];
            $('textarea').val(randomQuestion + ' ')
            $('textarea').focus()
            $('textarea')[0].selectionStart = randomQuestion.length + 1
            $('textarea')[0].selectionEnd = randomQuestion.length + 1

            $('.submit').show()

            e.preventDefault()
        })

        if (!localStorage.getItem('deviceId')) {
            function uuidv4() {
                return ([1e7] + -1e3 + -4e3 + -8e3 + -1e11).replace(/[018]/g, c =>
                    (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
                );
            }
            localStorage.setItem('deviceId', uuidv4())
        }

        $('.deviceId').val(localStorage.getItem('deviceId'))

        setInterval(() => {
            let clickCount = parseInt($('.clickCount').text())
            clickCount += Math.floor(Math.random() * 5) - 1
            $('.clickCount').text(clickCount)
        }, 800)
    });
</script>
<?= $this->endSection('script'); ?>