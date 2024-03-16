<!-- message.blade.ph

<div class="container bg-light">
    <div class="col">
        <!-- Temporary content for joining chat -->
        <div class="parent-container">
            <input type="text" class="user-name" placeholder="Name" v-model="currentUser">
            <button class="join-button btn btn-primary fw-bold" @click="join">Join</button>
        </div>

        <!-- Chat interface -->
        <div class="temporaryDelete text-input" v-if="joined">
            <!-- Chat box -->
            <div class="row chatBox">
                <!-- Main chat window -->
                <div class="row-12 row-md-6 row-lg-4 w-100 bg-light shadow main-data">
                    <!-- Chat profile and details -->
                    <button class='CloseChat'><i class="bi bi-arrow-left"></i></button>
                    <div class="profile">
                        <img src='./AdminPic/massage_pic1.jpg' alt="profile">
                    </div>
                    <div class='sender-data'>
                        <label>Kenneth Barinas</label>
                        <span>kbarinas2gmail.com</span>
                    </div>
                </div>

                <!-- Messages section -->
                <div class="col-12 col-md-9 col-lg-8">
                    <div class="notif-msg">
                        <div class="smg-text">
                            <!-- Display messages -->
                            @foreach($messages as $message)
                            <div class="sender-smg">
                                <div class="profile">
                                    <img src='./AdminPic/massage_pic1.jpg' alt="profile">
                                </div>
                                <div class="smg-text">
                                    <span>{{ $message->user }}</span>
                                    <span>{{ $message->text }}</span>
                                    <span style='font-size:12px;text-align:center;margin-top:10px;'>January 20 2024</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Chat sidebar -->
                <div class="col-12 col-md-3 col-lg-4" style='border-left:1px solid lightgrey'>
                    <div class="msg-notif" v-show="msgNotif">
                        <!-- Sidebar content -->
                        <div class="footer">
                            <h1>Messages</h1>
                            <div class="search">
                                <i class="bi bi-search"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                        </div>

                        <!-- Chat sender buttons -->
                        <button class="sender" @click="hideChat">
                            <div class='profile'>
                                <img src='./AdminPic/massage_pic1.jpg' alt="profile">
                            </div>
                            <div class="info-sender">
                                <label>Kenneth Barinas</label>
                            </div>
                        </button>
                        <!-- Add more sender buttons here as needed -->
                    </div>
                </div>

                <!-- Input message section -->
                <div class="row-12 row-md-6 row-lg-4 w-100 bg-dark p-2 shadow" style='margin-left:1px;'>
                    <div class='input-msgContainer'>
                        <div class="input-msg shadow">
                            <input type="text" v-model="text" @input="showHide" class="myinput" placeholder='Type message...'>
                            <button class="button-send" v-if="text.length > 0" type="submit" @click="sendMessage">
                                <i class="bi bi-send"></i>
                            </button>
                            <button class="button-send" v-show="showLikeButton">
                                <i class="bi bi-camera"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
