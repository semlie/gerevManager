<?php

require_once realpath(dirname(__FILE__)) . '/caller_manager.php';
require_once realpath(dirname(__FILE__)) . '/order_manager.php';
require_once realpath(dirname(__FILE__)) . '/../models/order_item.php';
require_once realpath(dirname(__FILE__)) . '/../models/order.php';
require_once realpath(dirname(__FILE__)) . '/../models/caller.php';
require_once realpath(dirname(__FILE__)) . '/../models/order_item_print.php';
require_once realpath(dirname(__FILE__)) . '/../models/orders_extend_model.php';

class web_manager {

    private $orderManager, $callerManager;

    function __construct() {
        $this->orderManager = new order_manager();
        $this->callerManager = new caller_manager();
    }

    //put your code here
    public function GetAllOrders() {
        return $this->orderManager->GetAllOpenOrders();
    }

    public function GetOrder($orderId) {
        return $this->orderManager->GetOrderById($orderId);
    }

    public function GetAllOrderItems($orderId) {
        return $this->orderManager->GetOrderItems($orderId);
    }

    public function GetOrderItem($orderItemId) {
        return $this->orderManager->GetOrderItem($orderItemId);
    }

    public function GetAllCallers() {
        return $this->callerManager->GetAllCallers();
    }

    public function GetCallerId($callerId) {
        return $this->callerManager->GetCallerById($callerId);
    }

    public function UpdateCaller($caller) {
        if (is_array($caller)) {
            $callerModel = $this->mapCaller($caller);
            $this->callerManager->UpdateCaller($callerModel);
        }
    }

    private function mapCaller($row) {
        $result = new caller;
        $result->Id = $row['Id'];
        $result->Name = $row['Name'];
        $result->Address = $row['Address'];
        $result->City = $row['City'];
        $result->PhoneNumber = $row['PhoneNumber'];
        $result->OtherPhone = $row['OtherPhone'];
        $result->Notes = $row['Notes'];
        $result->TimeStamp = $row['TimeStamp'];

        return $result;
    }

    public function UpdateOrderItem($orderItem) {
        if (is_array($orderItem)) {
            $orderItemModel = $this->mapOrderItem($orderItem);
            $this->orderManager->UpdateOrderItem($orderItemModel);
        }
    }

    private function mapOrderItem($row) {
        $result = new order_item;
        $result->CollerId = $row['CollerId'];
        $result->Id = $row['Id'];
        $result->OrderId = $row['OrderId'];
        $result->ProductId = $row['ProductId'];
        $result->Quantity = $row['Quantity'];
        $result->TimeStamp = $row['TimeStamp'];
    }

    public function UpdateOrder($order) {
        if (is_array($order)) {
            $orderModel = $this->mapOrder($order);
            $this->orderManager->UpdateOrder($orderModel);
        }
    }

    private function mapOrder($row) {
        $model = new order;
        $model->Id = $row['OrderId'];
        $model->CallerItemId = $row['CallerItemId'];
        $model->TimeStamp = $row['TimeStamp'];
        $model->Is_Delivered = $row['Is_Delivered'];
        $model->Is_Paid = $row['Is_Paid'];
        $model->TotalPrice = $row['TotalPrice'];
        $model->TotalQuantity = $row['TotalQuantity'];
        $model->TotalItems = $row['TotalItems'];

        return $model;
    }

}
