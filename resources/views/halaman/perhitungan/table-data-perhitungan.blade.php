<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Data -->
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">Nilai</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Nama</th>
                                    @foreach($kriteria as $krit)
                                    <th class="text-center">{{$krit->kode}} - {{$krit->nama_kriteria}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($alternatif))
                                @foreach($alternatif as $data)
                                <tr>
                                    <td>
                                        {{$data->nama}}
                                    </td>
                                    @foreach($data->nilai as $nilai)
                                    <td>{{ $nilai->nilai }}</td>
                                    @endforeach
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="{{(count($kriteria)+1)}}" class="text-center">Data tidak ditemukan</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Normalisasi -->
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left">Normalisasi</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="normalisasi" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Kode</th>
                                    <?php $bobot = [] ?>
                                    @foreach($kriteria as $krit)
                                    <?php $bobot[$krit->id] = $krit->bobot ?>
                                    <th class="text-center">{{$krit->kode}} [{{ $krit->bobot }}]</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($alternatif))
                                <?php $ranking = []; ?>
                                @foreach($alternatif as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <?php $total = 0; ?>
                                    @foreach($data->nilai as $nilai)
                                    @if($nilai->kriteria->sifat == 'Cost')
                                    <?php $normalisasi = number_format(($kode_krit[$nilai->kriteria->id] / $nilai->nilai), 2); ?>
                                    @elseif($nilai->kriteria->sifat == 'Benefit')
                                    <?php $normalisasi = number_format(($nilai->nilai / $kode_krit[$nilai->kriteria->id]), 2); ?>
                                    @endif
                                    <?php $total = number_format($total + ($bobot[$nilai->kriteria->id] * $normalisasi), 2); ?>
                                    <td>{{$normalisasi}}
                                    </td>
                                    @endforeach
                                    <?php $ranking[] = [
                                        // 'nim'  => $data->nim,
                                        'nama'  => $data->nama,
                                        'total' => $total
                                    ]; ?>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="{{(count($kriteria)+1)}}" class="text-center">Data tidak ditemukan</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <!-- Ranking -->
            <div class="card">
                <div class="card-header">
                    <h3>Ranking</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ranking" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Total</th>
                                    <th>Ranking</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    // var_dump($ranking);
                                usort($ranking, function ($a, $b) {
                                    return strcmp($a['total'], $b['total']);
                                    // return $a['total'] <=> $b['total'];
                                });
                                $ranking = array_reverse($ranking);
                                // print_r($ranking[0]);
                                // rsort($ranking);
                                // asort($ranking);
                                // array_revers
                                $a = 1;
                                ?>
                                @foreach($ranking as $t)
                                <tr>
                                    <td>{{ $t['nama'] }}</td>
                                    <td>{{$t['total']}}</td>
                                    <td>{{$a++}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <!-- Ranking -->
            <div class="card">
                <div class="card-header">
                    <h3>Kesimpulan</h3>
                </div>
                <div class="card-body">
                    <h4>Maka, didapat dengan peringkat nomor 1 adalah alternatif dengan nama <strong>{{ current($ranking)['nama'] }}</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>