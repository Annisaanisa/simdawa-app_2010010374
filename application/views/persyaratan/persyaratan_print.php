<?php
$pdf = new FPDF("P", "cm", "A4");
$pdf->AddPage();
$pdf->SetTitle("Laporan Persyaratan Beasiswa");
$pdf->SetFont("Arial", "B", "18");
$pdf->Cell(19, 1, "Kemahasiswaan Uniska Banjarmasin", 0, 1, "C");
$pdf->SetFont("Arial", "", "11");
$pdf->Cell(19, 1, "Alamat : Jl. Simpang Adhyaksa No. 2 Kel. Sungai Miai Kec. Banjarmasin Utara", 0, 1, "C");
$pdf->Line(1, 3, 20, 3);
$pdf->ln();
$pdf->SetFont("Arial", "B", "12");
$pdf->Cell(19, 1, "Laporan Persyaratan Beasiswa", 0, 1, "C");
$pdf->ln();
$pdf->SetFont("Arial", "B", "11");
$pdf->SetFillColor(0, 255, 0);
$pdf->Cell(1, 1, "No", 1, 0, "C", true);
$pdf->Cell(6, 1, "Nama Beasiswa", 1, 0, "C", true);
$pdf->Cell(4, 1, "Keterangan", 1, 0, "C", true);
$pdf->ln();
$pdf->SetFont("Arial", "", "11");
$no = 1;
foreach ($persyaratan as $a) {
    $pdf->Cell(1, 1, $no++, 1, 0, "C", false);
    $pdf->Cell(6, 1, $a->nama_persyaratan, 1, 0, "C", false);
    $pdf->Cell(4, 1, $a->keterangan, 1, 0, "C", false);
    $pdf->ln(); // Tambahkan ini untuk pindah ke baris berikutnya setelah setiap baris data
}
$pdf->Output();
