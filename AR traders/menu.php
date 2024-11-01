<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
    <link  rel="stylesheet" href="menu.css">
    <script src="menu.js" async> </script>

</head>
<body>

 <div id="nav-bar" >

    
</ul>  
    <ul><a class="btn-link" href="viewcurrentstock.php" >Stock</a></ul>
     <ul><a class="btn-link" href="readstockselling.php">Sales</a></ul>
       <ul><a class="btn-link" href="readstockreceiving.php">Purchase</a></ul>
        <ul class="dropdown" ><a class="btn-link" >Ledgers</a>
        <ul class="dropdown-content" style="background-color: transparent;">
            <li id="dropdown-link" >
                <a class="btn-link" href="salesLedgers.php" >Sales Ledger</a>
            </li>
            <li id="dropdown-link">
                <a class="btn-link" href="receiveLedgers.php">Receive Ledger</a>
            </li>

        </ul>
    
    </ul>
        <ul class="dropdown" ><a class="btn-link" >Reports</a>
        <ul class="dropdown-content" style="background-color: transparent;">
            <li id="dropdown-link" >
                <a class="btn-link" href="readClientHistory.php" >Client History</a>
            </li>
            <li id="dropdown-link">
                <a class="btn-link" href="readSupplierHistory.php">Supplier History</a>
            </li>
    </ul>
</ul>
        <ul class="dropdown" ><a class="btn-link" >Administrator</a>
        <ul class="dropdown-content" style="background-color: transparent;">
            <li id="dropdown-link" >
                <a class="btn-link" href="group.php" >Add Group</a>
            </li>
            <li id="dropdown-link">
                <a class="btn-link" href="form1.php">Add Item</a>
            </li>
            <li id="dropdown-link">
                <a class="btn-link" href="Supplier.php">Add Supplier</a>
            </li>
            <li id="dropdown-link">
                <a class="btn-link" href="Client.php">Add Client</a>
            </li>


        </ul>
    
    </ul>
    
    
 </div>
     

<div >
    <a class="btn-link" href="stockreceiving.php" >
    <button  >Stocks Receiving</button>
    </a>
    <a class="btn-link" href="stockSelling.php" >
        <button  >Stock Selling</button>
        </a>
</div>

<div >
    <a class="btn-link" href="readstockreceiving.php" >
    <button  >Read Received Stocks</button>
    </a>
    <a class="btn-link" href="readstockselling.php" >
        <button  >Read Sold Stocks</button>
        </a>
</div>
<div >
    <a class="btn-link" href="form.html" >
    <button  >Receipt Voucher</button>
    </a>
    <a class="btn-link" href="viewcurrentstock.php" >
        <button  >Stock View</button>
        </a>
</div>
<div >

    <span   class="expandable-btn btn-link "  >
        <a class="primary-btn">
            <button   >Cash</button>
        </a>
        <a class="secondary-btn" href="clientradio.php">
            <button >Cash Received </button>
        </a>
        <a class="secondary-btn" href="supplierradio.php">
            <button >Cash Payed </button>
        </a>
    </span >
    
    <span   class="expandable-btn btn-link "  >
        <a class="primary-btn">
            <button   >Cash History</button>
        </a>
        <a class="secondary-btn" href="readclientradio.php">
            <button >Cash Received </button>
        </a>
        <a class="secondary-btn" href="readsupplierradio.php">
            <button >Cash Payed </button>
        </a>
    </span >

    
</div>
    <div >
    <a class="btn-link" href="form.html" >
    <button  >Bank deposite Voucher</button>
    </a>
    <a class="btn-link" href="readbankledger.php" >
        <button  >Bank Ledgers</button>
        </a>
</div>
<div id="overlay" ></div>
<div >
    <a class="btn-link" href="form.html" >
    <button  >Bank Drawing Voucher</button>
    </a>

    <span   class="expandable-btn btn-link "  >
        <a class="primary-btn">
            <button   >Expenditure Statement</button>
        </a>
        <a class="secondary-btn" href="expenses.php">
            <button    > Add Expenses </button>
        </a>
        <a class="secondary-btn" href="readExpenses.php">
            <button    >Read Expenses </button>
        </a>
    </span >
</div>
<div >
    <a class="btn-link" href="form.html" >
    <button  >Credit / Debit Note Voucher</button>
    </a>
    <a class="btn-link" href="form.html" >
        <button  >List of Receivables</button>
        </a>
</div>
<div >
    <a class="btn-link" href="form.html" >
    <button  >Rebate Voucher</button>
    </a>
    <a class="btn-link" href="form.html" >
        <button  >List of Payables</button>
        </a>
</div>

<div id="trailer" >

</div>

</body>
</html>

