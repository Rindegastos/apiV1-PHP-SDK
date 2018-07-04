<?php

class RindeGastos {

    protected $AccToken;

    function __construct($token) {
        $this->AccToken = $token;
    }

    //list of expenses
    function getExpenses($params) {

        /* INSTRUCTIONS 
         * ResultsPerPage: Integer (mandatory)
         * Page: Integer (mandatory)
         * Since: Date Y-m-d
         * Until: Date Y-m-d
         * Currency: String (3) 
         * Status: Integer (1: Approved; 2: Rejected; 0: In Process; Blank: All) 
         * Category: String (100)
         * ReportId: Integer
         * ExpensePolicyId: Integer
         * UserId: Integer
         * OrderBy: Integer (1: Expense date; 2: Expense creation date; Blank: Expense date)
         * Order: String (ASC or DESC)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpenses?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Single expense
    function getExpense($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpense?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //list of reports
    function getExpenseReports($params) {

        /* INSTRUCTIONS 
         * ResultsPerPage: Integer (mandatory)
         * Page: Integer (mandatory)
         * Since: Date Y-m-d
         * Until: Date Y-m-d
         * TypeDateFilter: 1: Close Date; 2:Send Date; Blank: Close Date
         * Currency: String (3) 
         * Status: Integer (0: Open; 1: Close; Blank: All) 
         * ExpensePolicyId: Integer
         * UserId: Integer
         * OrderBy: Integer (1: Expense date; 2: Expense creation date; Blank: Expense date)
         * Order: String (ASC or DESC)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpenseReports?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //single Report
    function getExpenseReport($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpenseReport?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //list of funds
    function getFunds($params) {

        /* INSTRUCTIONS 
         * ResultsPerPage: Integer (mandatory)
         * Page: Integer (mandatory)
         * OrderBy: Integer (1: Creation Date; 2: Fund Title; Blank: Creation Date)
         * Order: String (ASC or DESC)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getFunds?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Single Fund
    function getFund($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getFund?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //list of policies
    function getExpensePolicies($params) {

        /* INSTRUCTIONS 
         * ResultsPerPage: Integer (mandatory)
         * Page: Integer (mandatory)
         * OrderBy: Integer (1: Creation Date; 2: Policy name; Blank: Creation Date)
         * Order: String (ASC or DESC)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicies?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Single Policy
    function getExpensePolicy($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicy?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //list of users
    function getUsers($params) {

        /* INSTRUCTIONS 
         * ResultsPerPage: Integer (mandatory)
         * Page: Integer (mandatory)
         * OrderBy: Integer (1: Creation Date; 2: LastName; Blank: Creation Date)
         * Order: String (ASC or DESC)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getUsers?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Single User
    function getUser($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getUser?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Single workflow
    function getExpensePolicyWorkflow($params) {

        /* INSTRUCTIONS 
         * IdPolicy: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicyWorkflow?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Policy categories list
    function getExpensePolicyCategories($params) {

        /* INSTRUCTIONS 
         * IdPolicy: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicyCategories?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Policy expense extra field list
    function getExpensePolicyExpenseFields($params) {

        /* INSTRUCTIONS 
         * IdPolicy: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicyExpenseFields?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Policy expense extra field list
    function getExpensePolicyExpenseReportFields($params) {

        /* INSTRUCTIONS 
         * IdPolicy: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicyExpenseReportFields?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //Policy taxes list
    function getExpensePolicyTaxes($params) {

        /* INSTRUCTIONS 
         * IdPolicy: Integer (mandatory)
          END INSTRUCTIONS */

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/getExpensePolicyTaxes?" . http_build_query($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //put expense report integration
    function setExpenseReportIntegration($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
         * IntegrationStatus: Integer (mandatory)
         * IntegrationCode: Integer (mandatory)
         * IntegrationDate: DateTime (mandatory)
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/setExpenseReportIntegration";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        $headers[] = "content-type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //put expense integration
    function setExpenseIntegration($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
         * IntegrationStatus: Integer (mandatory)
         * IntegrationCode: Integer (mandatory)
         * IntegrationDate: DateTime (mandatory)
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/setExpenseIntegration";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        $headers[] = "content-type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //create fund
    function createFund($params) {

        /* INSTRUCTIONS 
         * IdEmployee: Integer (Mandatory)
         * IdAdmin: Integer (Mandatory)
         * FundName: String (100) (Mandatory)
         * FundCurrency: String (3) ISO (Mandatory)
         * FundCode: String (100)
         * FundAmount: Float (Mandatory)
         * FundComment: String (256)
         * FundFlexibility: Bool
         * FundAutoDeposit: Bool
         * FundAutoBlock: Bool
         * FundExpiration: Bool
         * FundExpirationDate: date Y-m-d
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/createFund";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    //create fund
    function updateFund($params) {

        /* INSTRUCTIONS 
         * Id: Integer (Mandatory)
         * IdAdmin: Integer (Mandatory)
         * FundName: String (100) (Mandatory)
         * FundCode: String (100)
         * FundComment: String (256)
         * FundFlexibility: Bool
         * FundAutoDeposit: Bool
         * FundAutoBlock: Bool
         * FundExpiration: Bool
         * FundExpirationDate: date Y-m-d
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/updateFund";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        $headers[] = "content-type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    function depositMoneyToFund($params) {

        /* INSTRUCTIONS 
         * Id: Integer (Mandatory)
         * IdAdmin: Integer (Mandatory)
         * DepositAmount: Float (Mandatory)
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/depositMoneyToFund";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    function withdrawMoneyFromFund($params) {

        /* INSTRUCTIONS 
         * Id: Integer (Mandatory)
         * IdAdmin: Integer (Mandatory)
         * WithdrawAmount: Float (Mandatory)
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/WithdrawMoneyFromFund";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

    function setFundStatus($params) {

        /* INSTRUCTIONS 
         * Id: Integer (Mandatory)
         * IdAdmin: Integer (Mandatory)
         * FundStaus : String () (Mandatory)
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/setFundStatus";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        $headers[] = "content-type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = '- Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }
    
    //put expense report setExpenseReportCustomStatus
    function setExpenseReportCustomStatus($params) {

        /* INSTRUCTIONS 
         * Id: Integer (mandatory)
         * IdAdmin: Integer (mandatory)
         * CustomStatus: String (mandatory)
         * CustomMessage: String 
          END INSTRUCTIONS */
        $data_json = json_encode($params);

        //cUrl init: call to service
        $ch = curl_init();
        $url = "https://api.rindegastos.com/v1/setExpenseReportCustomStatus";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Bearer " . $this->AccToken;
        $headers[] = "content-type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //return transaction 
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            //Catch cUrl Error
            $result = 'Error:' . curl_error($ch);
        }

        //Close cUrl
        curl_close($ch);

        return $result;
    }

}

?>
