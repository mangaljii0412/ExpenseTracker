<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Expense Tracker</title>
    <link rel="stylesheet" href="CSS/home.css" />
  </head>
  <body>
    <!-- <h1>Expense Tracker</h1> -->

    <main>
      <!-- dashboard -->
      <div class="dashboard">
        <div class="profile">
          <div class="photo-block">
            <div id="photo"></div>
          </div>
          <a class="name">YOUR NAME</a>
        </div>

        <div class="menu">
          <ul>
            <li>
              <div class="only-flex-div">
                <div class="profile-image icons"></div>
                <a href="#profile">Profile</a>
              </div>
            </li>

            <li>
              <div class="only-flex-div">
                <div class="pie-chart-image icons"></div>
                <a href="#analysis">Analysis</a>
              </div>
            </li>
            
            <li>
              <div class="only-flex-div">
                <div class="support-image icons"></div>
                <a href="#support">Support</a>
              </div>
            </li>
          </ul>
        </div>

        <div class="exit">
          <div>
            <div class="arrow-image "></div>
            <p>Exit</p>
          </div>
        <a href="logout.php" class="btn btn-warning">Sign Out</a>

      </div>

      </div>



      <!-- tracker -->
      <div class="tracker">
        <header>
          <div>
            <h5>Total Balance</h5>
            <span id="balance">₹0.00</span>
          </div>
          <div>
            <h5>Income</h5>
            <span id="income">₹0.00</span>
          </div>
          <div>
            <h5>Expense</h5>
            <span id="expense">₹0.00</span>
          </div>
        </header>

        <section>
          <h3>Transactions</h3>
          <ul id="transactionList"></ul>
          <div id="status"></div>
        </section>

        <section>
          <h3>Add Transaction</h3>

          <form id="transactionForm">
            <div>
              <label for="type">
                <input type="checkbox" name="type" id="type" />
                <div class="option">
                  <span>Expense</span>
                  <span>Income</span>
                </div>
              </label>
            </div>
            <div>
              <label for="name">Cash Flow</label>
              <input type="text" name="name" required />
            </div>
            <div>
              <label for="amount">Amount</label>
              <input
                type="number"
                name="amount"
                value="0"
                min="0.01"
                step="0.01"
                required
              />
            </div>
            <div>
              <label for="date">Date</label>
              <input type="date" name="date" required />
            </div>
            <button id="submit" type="submit">Submit</button>
          </form>
        </section>
      </div>
    </main>

    <script src="JavaScript/home.js"></script>
  </body>
</html>