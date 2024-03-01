<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

  private $customer_name;
  private $computer_stats;
  private $printer_stats;
  private $television_stats;
  private $projector_stats;
  private $no_break_stats;
  private $other_stats;

  public function __construct()
  {
    parent::__construct();
    $this->require_min_level(1);
    $this->load->library('pdfgenerator');
    $this->load->model('report_model');
    $this->set_customer_data();
    $this->set_stats();
    $this->customer_name = $this->report_model->get_customer_name();
  }

  private function set_customer_data()
  {
    $this->report_model->set_customer_data($this->auth_user_id);
  }

  private function set_stats()
  {
    $this->computer_stats = $this->report_model->statistics_by_category(1);
    $this->printer_stats = $this->report_model->statistics_by_category(2);
    $this->television_stats = $this->report_model->statistics_by_category(3);
    $this->projector_stats = $this->report_model->statistics_by_category(4);
    $this->no_break_stats = $this->report_model->statistics_by_category(5);
    $this->other_stats = $this->report_model->statistics_by_category(6);
  }

  public function test()
  {
    echo $this->computer_stats['active'];
  }

  public function index()
  {
    $html =
    '
    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Reporte de Inventario</title>

        <style>

        td, th {
          text-align: center;
        }

        </style>
      </head>
      <body>
        <div class="container">
          <div class="row">
            <div class="col">

            <h1 class="text-center">PCB<span style="color: #5AB131;">TRONIKS</span></h1>

            <hr>

            <h2 class="text-center">Reporte de Inventario de ' . $this->customer_name . '</h2>

            <br />

            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Cómputo</th>
                  <th scope="col">Impresoras</th>
                  <th scope="col">Televisiones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Active</th>
                  <td>' . $this->computer_stats['active'] . '</td>
                  <td>' . $this->printer_stats['active'] . '</td>
                  <td>' . $this->television_stats['active'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Inactive</th>
                  <td>' . $this->computer_stats['inactive'] . '</td>
                  <td>' . $this->printer_stats['inactive'] . '</td>
                  <td>' . $this->television_stats['inactive'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Repair</th>
                  <td>' . $this->computer_stats['repair'] . '</td>
                  <td>' . $this->printer_stats['repair'] . '</td>
                  <td>' . $this->television_stats['repair'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Lost</th>
                  <td>' . $this->computer_stats['lost'] . '</td>
                  <td>' . $this->printer_stats['lost'] . '</td>
                  <td>' . $this->television_stats['lost'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Scrap</th>
                  <td>' . $this->computer_stats['scrap'] . '</td>
                  <td>' . $this->printer_stats['scrap'] . '</td>
                  <td>' . $this->television_stats['scrap'] . '</td>
                </tr>
              </tbody>
            </table>

            <br />

            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Proyectores</th>
                  <th scope="col">No-Break</th>
                  <th scope="col">Otros</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Active</th>
                  <td>' . $this->projector_stats['active'] . '</td>
                  <td>' . $this->no_break_stats['active'] . '</td>
                  <td>' . $this->other_stats['active'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Inactive</th>
                  <td>' . $this->projector_stats['inactive'] . '</td>
                  <td>' . $this->no_break_stats['inactive'] . '</td>
                  <td>' . $this->other_stats['inactive'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Repair</th>
                  <td>' . $this->projector_stats['repair'] . '</td>
                  <td>' . $this->no_break_stats['repair'] . '</td>
                  <td>' . $this->other_stats['repair'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Lost</th>
                  <td>' . $this->projector_stats['lost'] . '</td>
                  <td>' . $this->no_break_stats['lost'] . '</td>
                  <td>' . $this->other_stats['lost'] . '</td>
                </tr>
                <tr>
                  <th scope="row">Scrap</th>
                  <td>' . $this->projector_stats['scrap'] . '</td>
                  <td>' . $this->no_break_stats['scrap'] . '</td>
                  <td>' . $this->other_stats['scrap'] . '</td>
                </tr>
              </tbody>
            </table>

            </div>
          </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
      </body>
    </html>
    ';
    $this->pdfgenerator->generate($html, 'reporte.pdf');
  }
}
