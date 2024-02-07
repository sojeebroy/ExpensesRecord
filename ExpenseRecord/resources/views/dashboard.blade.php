<html>
<head>
<title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css">
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

    <section class="contant3">
            <h1>Welcome, </h1>
            <h4>{{session()->get('email')}}</h4>
            <p>Keep record on your Expences..... </p>
            <div class="row">
                <div class="contant-col">
                    <img src="/images/income.png">
                    <h3> <a href="/deposit/{{session()->get('email')}}">Add Deposit </a></h3>
                    <p>To record your expenses, you must need to add your monthly income.</p>
                </div>

                <div class="contant-col">
                    <img src="/images/expense.png">
                    <h3> <a href="/Expenses/{{session()->get('email')}}">Add Daily Expenses</a> </h3>
                    <p>To record your expenses, you must need to add your daily expenses.</p>

                </div>

                <div class="contant-col">
                    <img src="/images/records.png">
                    <h3> <a href="/monthlyReport/{{session()->get('email')}}">Monthly Expense Report</a> </h3>
                    <p>Here you can check recent and monthly reports.</p>
                </div>

            </div>
        </section>
</body>
</html>
