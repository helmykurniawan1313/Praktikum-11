<?php
include('tugas.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Tanggal');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'No. Akta Lahir');
$sheet->setCellValue('I1', 'Agama');
$sheet->setCellValue('J1', 'Kewarganegaraan');
$sheet->setCellValue('K1', 'Kebutuhan Khusus');
$sheet->setCellValue('L1', 'Almat');
$sheet->setCellValue('M1', 'RT');
$sheet->setCellValue('N1', 'RW');
$sheet->setCellValue('O1', 'Dusun');
$sheet->setCellValue('P1', 'Desa');
$sheet->setCellValue('Q1', 'Kecamatan');
$sheet->setCellValue('R1', 'Kode Pos');
$sheet->setCellValue('S1', 'Lintang');
$sheet->setCellValue('T1', 'Bujur');
$sheet->setCellValue('U1', 'Jenis Tempat Tinggal');
$sheet->setCellValue('V1', 'Transportasi');
$sheet->setCellValue('W1', 'No. KKS');
$sheet->setCellValue('X1', 'Anak Ke ');
$sheet->setCellValue('Y1', 'No. KPS / PKH');

$sql_select = "select * from data";
$query = mysqli_query($conn,$sql_select);
$i = 2;

while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $row['tanggal']);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('D'.$i, $row['NISN']);	
	$sheet->setCellValue('E'.$i, $row['NIK']);	
	$sheet->setCellValue('F'.$i, $row['Tempat_Lahir']);
	$sheet->setCellValue('G'.$i, $row['Tanggal_Lahir']);
	$sheet->setCellValue('H'.$i, $row['No_Akta']);
	$sheet->setCellValue('I'.$i, $row['Agama']);
	$sheet->setCellValue('J'.$i, $row['Kewarganegaraan']);
	$sheet->setCellValue('K'.$i, $row['Kebutuhan_Khusus']);
	$sheet->setCellValue('L'.$i, $row['Alamat']);
	$sheet->setCellValue('M'.$i, $row['RT']);
	$sheet->setCellValue('N'.$i, $row['RW']);
	$sheet->setCellValue('O'.$i, $row['Dusun']);
	$sheet->setCellValue('P'.$i, $row['Desa']);
	$sheet->setCellValue('Q'.$i, $row['Kecamatan']);
	$sheet->setCellValue('R'.$i, $row['Kode_Pos']);
	$sheet->setCellValue('S'.$i, $row['Lintang']);
	$sheet->setCellValue('T'.$i, $row['Bujur']);
	$sheet->setCellValue('U'.$i, $row['Tempat_Tinggal']);
	$sheet->setCellValue('V'.$i, $row['Transportasi']);
	$sheet->setCellValue('W'.$i, $row['Transportasi']);
	$sheet->setCellValue('X'.$i, $row['Anak_Ke']);
	$sheet->setCellValue('Y'.$i, $row['KPS']);
	$i++;

}
 mysqli_close($conn);
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:Y'.$i)->applyFromArray($styleArray);
$writer = new Xlsx($spreadsheet);
$writer->save('Data Pribadi Siswa.xlsx');
?>
