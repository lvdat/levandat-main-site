/*
levandat.tech
*/
function load_service(){
    $("#server-running").html('<tr><td colspan="6" class="text-center p-5"><h3><i class="fas fa-circle-notch fa-spin"></i> Đang tải dữ liệu</h3></td></tr>');
    $.getJSON('/api.php?type=service', function(data){
        let div = $("#server-running");
        div.html("");
        let oj = [];
        for(let i in data)
            oj.push([i, data[i]]);
        let service = oj[3][1];
        // console.log(service);
        for(let i = 0; i < service.length; i++){
            let live = (service[i]['ping'] != -1);
            div.append('<tr>');
            div.append('<th scope="row" class="text-center">' + (i+1) + '</th>');
            div.append('<td>' + service[i]['long_name'] +'</td>');
            div.append('<td>' + service[i]['des'] +'</td>');
            div.append('<td>' + '<a target="_blank" href="'+ service[i]['url'] + '" title="' + service[i]['long_name'] + '">' + service[i]['url'] + ' <i class="fas fa-xs fa-external-link-alt"></i></a>' + '</td>');
            div.append('<td class="text-center">' + (live ? '<span class="text-success"><i class="fas fa-check-circle"></i> Hoạt động</span>' : '<span class="text-danger">Bảo trì</span>') +'</td>');
            div.append('<td class="text-center">' + (live ? '<span class="text-success"><i class="fas fa-wifi"></i> ' + service[i]['ping'] + 'ms</span>' : '<i class="fas fa-times" style="color: red"></i>') +'</td>');
            div.append('</tr>');
        }
    });
}


