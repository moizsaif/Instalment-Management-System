@extends('layouts.app')
@section('content')
@section('pageTitle', 'Installments')

    {{--<table>--}}
        {{--<thead>--}}
            {{--<tr>--}}
                {{--<th></th>--}}
            {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td></td>--}}
            {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}

<table border="1" id="table1" >
    <tr>
        <th class="testClass" style="display:none"></th>
        <th col="product" class="testClass">Product</th>
        <th col="price" summary="max" class="testClass">Price</th>
        <th col="quantity" summary="avg" class="testClass">Quantity</th>
        <th col="discount" class="testClass">Discount</th>
        <th class="testClass" style="display:none"></th>
        <th col="subtotal" formula="price*quantity*(1 - 0.10 * discount)" summary="sum" class="testClass">Subtotal</th>
    </tr>
    <tr>
        <td style="display:none"></td>
        <td>
            <select name="det[0][item]" >
                <option value="1">Computer</option>
                <option value="2">Iphone</option>
                <option value="3">Mouse</option>
                <option value="4">Keyboard</option>
                <option value="5">Screen</option>
                <option value="6">USB Memmory</option>
                <option value="7">CD Burner</option>
                <option value="8">Hard Drive</option>
                <option value="9">Motherboard</option>
                <option value="10">Case</option>
            </select>
        </td>
        <td>
            <input name="det[0][price]" type="text" class="num" value="10" />
        </td>
        <td>
            <input name="det[0][quantity]" type="text" class="num" value="1" />
        </td>
        <td>
            <input name="det[0][discount]" type="checkbox" />
        </td>
        <td style="display:none"></td>
        <td class="num">
        </td>
    </tr>
    <tr>
        <td style="display:none"></td>
        <td>
            <select name="det[1][item]" >
                <option value="1">Computer</option>
                <option value="2">Iphone</option>
                <option value="3">Mouse</option>
                <option value="4">Keyboard</option>
                <option value="5">Screen</option>
                <option value="6">USB Memmory</option>
                <option value="7">CD Burner</option>
                <option value="8">Hard Drive</option>
                <option value="9">Motherboard</option>
                <option value="10">Case</option>
            </select>
        </td>
        <td>
            <input name="det[1][price]" type="text" class="num" value="2.33" />
        </td>
        <td>
            <input name="det[1][quantity]" type="text" class="num" value="3" />
        </td>
        <td>
            <input name="det[1][discount]" type="checkbox" />
        </td>
        <td style="display:none"></td>
        <td class="num">
        </td>
    </tr>
    <tr>
        <td style="display:none"></td>
        <td>
            <select name="det[2][item]" >
                <option value="1">Computer</option>
                <option value="2">Iphone</option>
                <option value="3">Mouse</option>
                <option value="4">Keyboard</option>
                <option value="5">Screen</option>
                <option value="6">USB Memmory</option>
                <option value="7">CD Burner</option>
                <option value="8">Hard Drive</option>
                <option value="9">Motherboard</option>
                <option value="10">Case</option>
            </select>
        </td>
        <td>
            <input name="det[2][price]" type="text" class="num" value="5.5" />
        </td>
        <td>
            <input name="det[2][quantity]" type="text" class="num" value="2" />
        </td>
        <td>
            <input name="det[2][discount]" type="checkbox" />
        </td>
        <td style="display:none"></td>
        <td class="num">
        </td>
    </tr>

</table>

<input type="submit" value="Submit" id="submit1" disabled="true"/>
<a id="button1" href="#">Convert Table 1</a>
<h4>Code to convert table1</h4>



@endsection
@section('page-script')
    <script>
        $(document).ready(function(){
            Grider = {
                defaults : {
                    initCalc: true,
                    addRow: true,
                    addRowWithTab: true,
                    delRow: true,
                    decimals: 2,
                    addRowText: '<caption><a href="#">Add Row</a></caption>',
                    delRowText: '<td><a href="#" class="delete">delete</a></td>',
                    countRow: false,
                    countRowCol: 0,
                    countRowText: '#',
                    countRowAdd: false,
                    addedRow: false
                }
            }

            //$('#submit1').hide();
            $('#button1').click(function(){
                $('#table1').grider({countRow: true, countRowAdd: true});
                $(this).hide();
                $('#submit1').attr('disabled', false)
            });
        });

    </script>
@endsection