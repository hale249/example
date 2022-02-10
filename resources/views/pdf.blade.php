<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<style>
    body {
        font-family: DejaVu Sans, serif;
        font-size: 14px;
    }

    .f-left {
        float: left;
    }

    .f-right {
        float: right;
    }

    .clear {
        clear: both;
    }

    .header {
        display: inline-block;
        margin: auto auto 3rem;
        width: 100%;
    }

    .header__company {
        margin-left: 10px;
    }

    .header__logo {
        margin-right: 10px;
    }

    .header__logo--image {
        width: 120px;
        height: 120px;
    }

    .invoice__title {
        color: blue;
        font-size: 1.3rem;
        padding: 0.2rem;
        border-bottom: 1px solid #dfe0e1;
    }

    .invoice__content {
        display: inline-block;
        padding-top: 1rem;
    }

    .invoice {
        padding-bottom: 1rem;
        margin-top: 2rem;
    }

    .text-primary {
        color: #23527c;
    }

    .mb-2 {
        margin-bottom: 1rem;
    }

    .mb-2rem {
        margin-bottom: 2rem;
    }

    .w-100 {
        width: 100%;
    }

    .w-33 {
        width: 33.333%;
    }

    .w-50 {
        width: 50%;
    }

    .h-100 {
        height: 100%;
    }

    .m-auto {
        margin: auto;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
    }

    th,
    td {
        text-align: left;
        padding: 0.5rem;
    }

    .table__content {
        height: 2rem;
        background: #f6f6f7;
    }

    .table__content td {
        padding: 1.3rem 0.5rem;
        border-top: 1px solid #dfe0e1;
        border-bottom: 1px solid #dfe0e1;
    }

    .content__table--header th {
        padding-top: 2rem;
        padding-bottom: 1rem;
    }

    .text-right {
        text-align: right;
    }

    .footer--right {
        float: left;
        text-align: right;
        width: 50%;
    }

    .footer__table tr td {
        width: 50%;
        text-align: right;
    }

    .footer__table .border__bottom td {
        border-bottom: 1px solid #181717;
    }

    .footer__table tr td {
        padding: 3px 0;
    }
</style>
<body>
<section class="header">
    <div class="header__logo f-left w-33">
        <img
            class="header__logo--image m-auto"
            src="https://invoice.dev.gobysend.com/logo/ruljsdtzkycyz6puc6ysdqmra6c6oo7i.png?no_cache=1642562095"
            alt="Logo Gobysend"
        />
    </div>
    <div class="header__company f-left w-33">
        <div class="text-primary">Công ty cổ phần Gobysend</div>
        <div>https://gobysend.com</div>
        <div>cs@gobysend.com</div>
    </div>
    <div class="header__address f-left">
        <div>12 Khuất Duy Tiến</div>
        <div>Hà Nội, Việt Nam</div>
        <div>Hà Nội, Việt Nam</div>
    </div>
</section>
<section class="invoice clear">
    <div class="invoice__title text-primary">INVOICE</div>
    <div class="w-50 invoice__content">
        <div class="f-left w-33">
            <div>Invoice Number</div>
            <div>PO Number</div>
            <div>Invoice Date</div>
        </div>
        <div class="f-left w-33">
            <div>0067</div>
            <div>SUB01098</div>
            <div>30-12-2021</div>
        </div>
        <div class="f-left w-33" style="padding-bottom: 1rem">
            <div>0067</div>
            <div>SUB01098</div>
            <div>lehatybg1 lehatyb1@gmail.com</div>
        </div>
    </div>
</section>
<section class="content clear" style="  margin-bottom: 2rem; border-top: 1px solid #dfe0e1; margin-top: 2rem">
    <table class="w-100">
        <tr class="content__table--header">
            <th>Item</th>
            <th>Description</th>
            <th>Billing Cycle</th>
            <th>Unit Cost</th>
            <th>Quantity</th>
            <th>Line Total</th>
        </tr>
        <tr class="table__content">
            <td class="text-primary">Standard</td>
            <td>Number contact: 2,000</td>
            <td>12 month</td>
            <td>4.800.000 VNĐ</td>
            <td>1</td>
            <td>4.800.000 VNĐ</td>
        </tr>
    </table>
</section>
<section class="footer">
    <div class="f-right w-50">
        <table class="w-100 footer__table">
            <tr>
                <td>Subtotal</td>
                <td>4.800.000 VNĐ</td>
            </tr>
            <tr class="border__bottom">
                <td>Invoice Total</td>
                <td class="text-primary">4.800.000 VNĐ</td>
            </tr>
            <tr class="">
                <td>Chuyển khoản</td>
                <td class="text-primary">4.800.000 VNĐ</td>
            </tr>
            <tr class="border__bottom">
                <td>Balance Due</td>
                <td class="text-primary">4.800.000 VNĐ</td>
            </tr>
        </table>
    </div>
</section>
</body>
</html>
