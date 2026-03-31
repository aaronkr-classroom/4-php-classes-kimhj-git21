<?php
// classes/Account.php 계좌 관리하는 

include_once('AccountNumber.php');

class Account {
    //계좌 속성
    public AccountNumber $acct_num; // 정수 1234
    public string $type; // 문자열 'ㄱㄴㄱ'
    public float $balance; // 실수 12.
    
    // 생성자 __construct()

    // 함수 오버로딩 (같은 이름 사용)
    public function __construct(
        AccountNumber $acct_num = new AccountNumber(20260331.2), string $type = '', float $balance = 0.0
        ) { 
        $this->acct_num = $acct_num;
        $this->type = $type;
        $this->balance = $balance;
    }

    //계좌의 메소드 (함수)
    public function deposit(float $amount): float {
        //예금에 대한 코드
        $this->balance += $amount;
        return $this->getBalance();
    }
    public function withdraw(float $amount): float {
        //출금에 대한 코드
        $this->balance -= $amount;
        return $this->getBalance();
    }
    public function getBalance(): float {
        return $this->balance;
    }
}
?>