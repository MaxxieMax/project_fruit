<!-- <div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-6">

        </div>
    </div>
</div> -->



<body>
    <main class="container mt-5">
        <div class="row">
            <div class="col-6">
                <form action="./index.php?content=register_script" method="POST">
                <!-- voornaam -->
                <!-- <div class="form-group">
                    <label for="firstname" id="administratieText">Voornaam</label>
                    <input type="text" class="form-control" id="Naam" aria-describedby="firstnameHelp" name="firstname" placeholder="Invoer Voornaam">
                </div> -->
                <!-- email -->
                <div class="form-group">
                    <label for="email" id="administratieText">E-mailadres</label>
                    <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Invoer E-mailadres">
                </div>
                <!-- Mobiel Nummer -->
                <!-- <div class="form-group">
                    <label for="Mnumber" id="administratieText">Mobiel Nummer</label>
                    <input type="text" class="form-control" id="Nummer" aria-describedby="MnumberHelp" name="Mnumber" placeholder="Invoer Mobiel Nummer">
                    <small id="numberHelp" class="form-text text-muted">(Niet verplicht)</small>
                </div> -->
                <!-- de buttons -->
                <button type="submit" class="btn btn-danger btn-lg btn-block">Versturen</button>
            </form>
        </div>
        <div class="col-6">
            <img src="./images/yoda.jpg" alt="Robot inloggen">
        </div>
    </div>
    </main>
</body>