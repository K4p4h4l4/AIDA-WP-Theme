<?php
/*
Template Name: Factura Proforma
*/

if (WC()->cart->is_empty()) {
        wp_die('Cart is empty', 'Cart Empty', 400); // Send a 400 bad request response
    }

    // Include FPDF library
    require_once get_template_directory() . '/lib/fpdf.php';

    // Initialize FPDF and create the invoice
    $pdf = new FPDF('P','mm','A4');
    $pdf->AddPage();
    // Add a logo Image(file path name, xposition, y position, width, height)
    $pdf->Image('./wp-content/uploads/2023/09/Logo_AIDA.png',10,6,50); // Path to logo image 10, 6, 30
    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(120, 5, '', 0, 0);
    $pdf->Cell(70, 5, 'AIDA', 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(120, 5, '', 0, 0);
    $pdf->Cell(70, 5, iconv('UTF-8', 'windows-1252', 'www.aida.ao'), 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(120, 5, '', 0, 0);
    $pdf->Cell(70, 5, iconv('UTF-8', 'windows-1252', 'geral@aida.ao'), 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(120, 5, '', 0, 0);
    $pdf->Cell(70, 5, iconv('UTF-8', 'windows-1252', '+244 923 695 077'), 0, 1, 'L');
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(120, 5, '', 0, 0);
    $pdf->Cell(70, 5, iconv('UTF-8', 'windows-1252', 'Luanda, Viana, Zango 0, Vila Chinesa, nº12'), 0, 1, 'L');
    // Line break
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 17);    
    
    //Cell(width, height, text, border, end line, align);
    // Title
    $pdf->Cell(189, 5, 'Factura Proforma', 0, 1, 'L');
    $pdf->Cell(59, 10, '',0,1);
    // Line break
    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(94, 6, 'ENVIAR PARA:', 0, 0, 'L' );
    $pdf->Cell(94, 6, 'DETALHES DE FACTURA:', 0, 1, 'L' );
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell(94, 6, iconv('UTF-8', 'windows-1252', '[NOME]'), 0, 0, 'L' ); //Nome
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', 'Factura nº: '), 0, 0, 'L' );
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', '-'), 0, 1, 'L' );
    $pdf->Cell(94, 6, iconv('UTF-8', 'windows-1252', '[MORADA]'), 0, 0, 'L' ); //Morada
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', 'Facturação Data: '), 0, 0, 'L' );
    $pdf->Cell(47, 6, ''.date('d/m/Y'), 0, 1, 'L' );
    $pdf->Cell(94, 6, iconv('UTF-8', 'windows-1252', '[PAÍS]'), 0, 0, 'L' ); //País
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', 'Encomenda Nº: '), 0, 0, 'L' );
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', '-'), 0, 1, 'L' );
    $pdf->Cell(94, 6, iconv('UTF-8', 'windows-1252', '[PROVÍNCIA]'), 0, 0, 'L' ); //Cidade
    $pdf->Cell(47, 6, iconv('UTF-8', 'windows-1252', 'Encomenda Data: '), 0, 0, 'L' );
    $pdf->Cell(47, 6, date('d/m/Y'), 0, 1, 'L' );
    $pdf->Cell(94, 6, iconv('UTF-8', 'windows-1252', '[EMAIL]'), 0, 1, 'L' ); //Email
    
    $pdf->Ln(8);
    // Set font for the body
    $pdf->SetFont('Arial', 'B', 10);

    // Set column widths
    $column_widths = array(10, 60, 30, 50, 40);
    // Header0
    $pdf->SetFillColor(0,0,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->Cell($column_widths[0], 10, '#', 1, 0, 'L', true);
    $pdf->Cell($column_widths[1], 10, 'Produto', 1, 0, 'L', true);
    $pdf->Cell($column_widths[2], 10, 'Quantidade', 1, 0, 'L', true);
    $pdf->Cell($column_widths[3], 10, iconv('UTF-8', 'windows-1252', 'Preço'), 1, 0, 'L', true);
    $pdf->Cell($column_widths[4], 10, 'Subtotal', 1, 1, 'L', true); // 1, 1, 'C' means new line after this cell
    $pdf->SetFont('Arial', '', 9);
    $pdf->SetTextColor(0,0,0);
    $pdf->SetFillColor(237,239,242);
    $fill = true;
    $i = 1;
    // Add content to the PDF using FPDF functions
    foreach (WC()->cart->get_cart() as $cart_item) {
        $product = $cart_item['data'];
        $quantity = $cart_item['quantity'];

        $pdf->Cell($column_widths[0], 10, $i, 0, 0, 'L', $fill);
        $pdf->Cell($column_widths[1], 10, $product->get_name(), 0, 0, 'L', $fill);        
        $pdf->Cell($column_widths[2], 10, $quantity, 0, 0, 'L', $fill);
        $pdf->Cell($column_widths[3], 10, 'AKZ '.number_format($product->get_price(), 2, ',', '.'), 0, 0, 'L', $fill);
        $pdf->Cell($column_widths[4], 10, 'AKZ '.number_format($cart_item['line_total'], 2, ',', '.'), 0, 1, 'L', $fill);
        //$fill=!$fill;
        $i++;
    }
    
    //$pdf->Line(2,10,4, 20);
    //$pdf->SetLineWidth(2);

    
    if ( function_exists( 'WC' ) ) {
        // Make sure WooCommerce is active and the cart is available
        $cart = WC()->cart;

        $cart_total = $cart->get_total(); // Total
        $cart_subtotal = $cart->get_subtotal(); // Subtotal
        $cart_tax = $cart->get_total_tax(); // Total tax
        $shipping_total = $cart->get_shipping_total(); // Total shipping cost

        
    }
    
    $pdf->Ln(8);
    $pdf->Cell(100, 10, '',0,0);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($column_widths[3], 10, 'Subtotal',0,0, 'L');
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell($column_widths[4], 10, 'AKZ '.number_format($cart_subtotal, 2, ',', '.'),0,1);
    $pdf->Cell(100, 10, '',0,0);
    $pdf->SetFillColor(0,0,0);
    $pdf->SetTextColor(255,255,255);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell($column_widths[3], 10, 'Total',0,0, 'L', true);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell($column_widths[4], 10, 'AKZ '.number_format($cart_subtotal, 2, ',', '.'),0,1, 'L', true);
    
    $pdf->SetTextColor(0,0,0);
    // Footer
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->SetY(-50);
    $pdf->Cell(189, 10, iconv('UTF-8', 'windows-1252', 'Formas de pagamento da loja online'), 0, 1, 'C');
    $pdf->SetFont('Arial', '', 8);
    $pdf->SetY(-47);
    $pdf->Cell(189, 10, iconv('UTF-8', 'windows-1252', 'Referência Multicaixa: No fim da encomenda é lhe enviado um email com os dados. No Multicaixa siga os passos: '), 0, 1, 'C');
    $pdf->SetY(-44);
    $pdf->Cell(189, 10, iconv('UTF-8', 'windows-1252', '1 – Pagamentos – 2 – Compras Online – 3 – AIDA.AO'), 0, 1, 'C');
    $pdf->SetY(-41);
    $pdf->Cell(189, 10, iconv('UTF-8', 'windows-1252', 'Transferência bancária: Atlântico IBAN/NIB – AO06.0034.0000.0500.8373.3585.8 | BFA IBAN/NIB –'), 0, 1, 'C');
    $pdf->SetY(-38);
    $pdf->Cell(189, 10, iconv('UTF-8', 'windows-1252', 'AO06.0055.0000.8838.4866.1016.2 | BAI IBAN/NIB – AO06.0040.0000.6277.3928.1014.8'), 0, 1, 'C');
    $pdf->SetFont('Arial', 'I', 8);
    $pdf->SetY(-31);
    $pdf->Cell(0, 10, iconv('UTF-8', 'windows-1252', 'Página ') . $pdf->PageNo() . '/ {pages}', 0, 1, 'C');

    // Output the PDF
    $pdf->Output('I', 'proforma-invoice.pdf');
    exit;
?>