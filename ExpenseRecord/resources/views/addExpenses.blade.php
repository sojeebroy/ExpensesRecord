<head>
<title>addExpenses</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css">
    <link href="/css/style2.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg">
    <section>
        <nav>
                <a href="/welcome"><img src="/images/logo.png"></a>
                <div class="nav-links">
                    <ul>
                        <li><a href="/welcome">HOME</a></li>
                        <li><a href="/logout">LOG OUT</a></li>

                    </ul>
                </div>
            </nav>
    </section>

    <section class="contant5">
        <div class="container">
            <form action="/Expenses/{{session()->get('email')}}" method="POST">
            {{csrf_field()}}
                <h3>Add your Daily Expenses...</h3><hr>
                <div class="content">
                    <div class="input-box">
                        <label for="Amount"> <h5>Amount: </h5></label>
                        <input type="number" name="Amount" id="Amount" placeholder=" The amount you spent." required>
                    </div>

                    <div class="input-box">
                        <label for="Date"><h5>Date: </h5></label>
                        <input type="Date" name="Date" id='Date' required>
                    </div>

                    <div class="input-box">
                        <label for="Month"><h5>Month: </h5></label>
                        <select id="Month" name="Month" required >
                            <option value="Month" disabled>Select a Month </option>
                            <option value="January">January </option>
                            <option value="February">February</option>
                            <option value="March">March </option>
                            <option value="April">April </option>
                            <option value="May">May </option>
                            <option value="June">June </option>
                            <option value="July">July </option>
                            <option value="Auguest">Auguest </option>
                            <option value="September">September </option>
                            <option value="October">October</option>
                            <option value="November">November </option>
                            <option value="December">December </option>
                        </select>
                    </div>

                    <h5>Category: </h5>
                    <div class="category">
                        <input type="radio" name="Category" id="Rent" value="Rent">
                        <label for="Rent"> Rent</label>

                        <input type="radio" name="Category" id="Meal" value="Meal">
                        <label for="Meal"> Meal</label>

                        <input type="radio" name="Category" id="Medicine" value="Medicine">
                        <label for="Medicine"> Medicine</label>

                        <input type="radio" name="Category" id="Food" value="Food">
                        <label for="Food"> Food</label>

                        <input type="radio" name="Category" id="Bills and Services" value="Bills and Services">
                        <label for="Bills and Services"> Bills and Services</label>

                        <input type="radio" name="Category" id="Travel" value="Travel">
                        <label for="Travel"> Travel</label>

                        <input type="radio" name="Category" id="Groceries" value="Groceries">
                        <label for="Groceries"> Groceries</label>

                        <input type="radio" name="Category" id="Others" value="Others">
                        <label for="Others"> Others</label>
                    </div>

                    <div>
                    <button type="submit" name="submit" class="btn btn-primary">Add Expense</button>
                    <a href="dashboard" class="btn btn-danger"> Cancle</a>
                    </div>
            </form>
        </div>
    </section>




</body>


