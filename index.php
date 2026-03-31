<?php
require_once('classes/Account.php');
require_once('classes/Customer.php');

$accounts = []; // 아니면 array(); 사용해야 함

$account1 = new Account();
// $account -> acct_num = '20260331';
// $account -> type = 'Savings';
// $account -> balance = '1234567.89';

$account1->type = "Checking";
$account1->acct_num = new AccountNumber(20260331, 1);
$account1->deposit(1000); // 입금 함수

$account2 = new Account(new AccountNumber(20260331, 2), 'Savings', 1234567.89); // 새 계좌 생성 가능
$account2->withdraw(1000000); // 출금 함수

$accounts = [$account1, $account2];

$user = new Customer('kk', 'kk');
?>

<?php include ('includes/header.php'); ?>

<h2><?php echo $user->getFullName(); ?>'s Accounts</h2>
<?php foreach ($accounts as $a) { ?>
<ul>
    <li>Number: <?php echo $a->acct_num->routing_num . '-'. $a->acct_num->account_num; ?></li>
    <li>type: <?php echo $a->type; ?></li>
    <li>balance: $<?php echo $a->balance; ?></li>
</ul>
<?php } ?>

<?php include ('includes/footer.php'); ?>