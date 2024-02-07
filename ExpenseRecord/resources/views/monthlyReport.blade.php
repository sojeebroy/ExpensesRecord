<head>
<title>mothlyReport</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}" type="text/css">
    <link href="/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.2/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="bg">
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

    <br>
    <h2 align='center'>...Your Monthly Expense Details...</h2>
    <hr>
    <div class="search2">
        <a href="/dashboard" class="btn btn-danger"> Back to Dashboard</a>
    </div>
    <div class="search">
            <div class="form-group">
            <form action="/monthlyReport/{{session()->get('email')}}" method="GET">
                <div class="input-group">
                <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                <button type="submit" class="btn btn-primary">Search</button>
                <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
            </form>
            </div>
    </div>

        <div class="container2">
        @if(isset($expenses))
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Expense Id</th>
                        <th scope="col">Date</th>
                        <th scope="col">Calegory</th>
                        <th scope="col">Month</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($expenses)>0)
                        @foreach($expenses as $expense)
                            <tr>
                                <td >{{ $expense->id}}</td>
                                <td >{{ $expense->Date}}</td>
                                <td >{{ $expense->Category}}</td>
                                <td >{{ $expense->Month}}</td>
                                <td >{{ $expense->Amount}}</td>
                            </tr>
                            <span style="color:white;">{{$total = $total +$expense->Amount}}</span>
                        @endforeach
                        @else
                            <tr><td><p style="color:red;">No Result found</p></td></tr>
                            <tr><td><p style="color:red;">No Expense add in this month</p></td></tr>
                </tbody>
                    @endif
            </table>

        @endif

        @if(isset($expenses))
            @if((bool)$depositsQuery == 1)
                @foreach($depositsQuery as $dept)
                <span style="color:white;">{{ $totalDeposit= $totalDeposit + $dept->DepositAmount }}</span>
                @endforeach
            @else
                <p style="color:red;">No Result found</p>
            @endif
            <div class="">
                @if(($totalDeposit - $total)>0)
                    <h5 class="total">Total Expense:    {{$total}} Taka <hr>Available Balance: {{($totalDeposit - $total)}} Taka</h5>
                @else
                    <h5 class="total">Total Expense:    {{$total}} Taka <hr>Available Balance is in Credited</h5>
                @endif
            </div>
        @endif
        </div>

</body>
