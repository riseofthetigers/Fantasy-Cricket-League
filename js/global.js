function add(player_id, name) {
    var flag;
    var BID = "#" + player_id;
    $(BID).attr('disabled','disabled');
    $(BID).hide();
    $(BID).addClass("tick");
    $(BID).html('<img src="images/tick.png" />');
    $(BID).show();
    flag = 1;
    var datastring = 'player_id=' + player_id + '&flag=' + flag;
    $.ajax({
        type: "POST",
        url: "add.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
            $('#loadingar').html('');
            if (response == 'Spread the love!') {

                swal({
                    title: "Spread the love.",
                    text: "Max 7 cricketers allowed from 1 team!",
                    imageUrl: "images/wrong.png",
                    timer: 4000,
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 97) {

                swal({
                    title: "Oops!",
                    text: "You cannot Add a Player more than once!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 99) {

                swal({
                    title: "Oops!",
                    text: "You cannot Remove a Player which you have not even added!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No Wicket-Keeper!') {

                swal({
                    title: "Dude - where's your keeper?",
                    text: "No team is complete without a wicket-keeper",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No All-Rounder!') {

                swal({
                    title: "All-rounder missing",
                    text: "Every team needs atleast 1 All-rounder",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No Wicket-Keeper and no All-Rounder!') {

                swal({
                    title: "Wicket-Keeper and All-Rounder Missing!",
                    text: "Every team needs atleast 1 All-rounder and atleast 1 Wicket-Keeper",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No bowler!') {

                swal({
                    title: "Bowler Missing!",
                    text: "Every team needs atleast 3 Bowlers!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No batsman!') {

                swal({
                    title: "Batsman Missing!",
                    text: "Every team needs atleast 3 batsman",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max Wicket-Keeper!') {

                swal({
                    title: "Wicket-keeper Overdose!",
                    text: "You gotta have a balanced team.\nMax 1 wicket-keeper allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max All-Rounder!') {

                swal({
                    title: "All-Rounder Overdose!",
                    text: "You gotta have a balanced team. \nMax 3 all-rounders allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max bowler!') {

                swal({
                    title: "Bowler Overdose!",
                    text: "You gotta have a balanced team. \nMax 5 bowlers allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max batsman!') {

                swal({
                    title: "Batsman Overdose!",
                    text: "You gotta have a balanced team. \nMax 5 batsman allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max team limit!') {

                swal({
                    title: "That's 12 too many",
                    text: "You can't choose more than 11 cricketers in your team",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Not enough credits!') {

                swal({
                    title: "You're maxed out !",
                    text: "Sorry, you don't have enough credits left !",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else {
				$('#teamcomplete').html('');
                var res = response.split(" ");
                $('#rc').html(res[0]);
                $('#tc').html(res[1] + '/11');
                teamcount();
                s();
            }
        }
    });

}

function s() {
    for (var l = 1; l <= 22; l++) {
        var SID2 = '#show' + l;
        $(SID2).hide();
    }
    var datastring = 'player_id=' + 'k';
    $.ajax({
        type: "POST",
        url: "show.php",
        cache: false,
        data: datastring,
        dataType: 'json',
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
                for (var i = 1; i < response.length; i++) {
                    var skill = response[i].skill;
					
                    var name = response[i].text;
                    var team = response[i].team;
                    var credits = response[i].credits;
                    var value = response[i].value;
                    var SID = '#show' + i;
                    var BTNLTID = '#btnlt' + i;
                    $(SID).show();
                    var PID = '#playername' + i;
                    var SKILLID = '#playerskill' + i;
                    var TEAMID = '#teamname' + i;
                    var CREDITSID = '#creditsname' + i;
                    $(PID).html(name);
                    $(SKILLID).html(skill);
                    $(TEAMID).html(team);
                    $(CREDITSID).html(credits);
                    if (response[i].nteams == 8)
                        var formFunction = 'rmp2('+i+',' + value + ');';
                    else
                        var formFunction = 'rmp('+i+',' + value + ');';
                    $(BTNLTID).attr('onclick', formFunction);
                }
			$('#loadingar').html('');
        }
    });
}

function rmp(id,player_id) {
var BID = "#" + player_id;
var BRN = "#btnlt" + id;
$(BRN).attr('disabled','disabled');
$('.fancybox').attr('disabled','disabled');
    var datastring = 'player_id=' + player_id + '&flag=0';
    $.ajax({
        type: "POST",
        url: "add.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
			$('#teamcomplete').html('');
            $('#loadingar').html('');
            var res = response.split(" ");
            $('#rc').html(res[0]);
            $('#tc').html(res[1] + '/11');
            $(BID).html('Add');
            $(BID).removeClass('tick');
            $(BID).removeAttr('disabled');
			$(BRN).removeAttr('disabled');
			$('.fancybox').attr('disabled','disabled');
            s();
        }
    });
}

function rmp2(id,player_id) {
var BID = "#" + player_id;
var BRN = "#btnlt" + id;
$(BRN).attr('disabled','disabled');
$('.fancybox').attr('disabled','disabled');
    var datastring = 'player_id=' + player_id + '&flag=0';
    $.ajax({
        type: "POST",
        url: "add2.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
			$('#teamcomplete').html('');
            $('#loadingar').html('');
            var res = response.split(" ");
            $('#rc').html(res[0]);
            $('#tc').html(res[1] + '/22');
            $(BID).removeAttr('disabled');
            $(BID).html('Add');
            $(BID).removeClass('tick');
			$(BRN).removeAttr('disabled');
			$('.fancybox').attr('disabled','disabled');
            s();
        }
    });
}

function c() {
    $('#c').attr('disabled', 'disabled');
    $('.fancybox').hide();
    var datastring = 'player_id=' + 'k';
    $.ajax({
        type: "POST",
        url: "clear.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
			$('#teamcomplete').html('');
            $('#loadingar').html('');
            s();
            location.reload();
            $('#c').removeAttr('disabled');
        }
    });
}

function teamcount() {
    var datastring = 'player_id=' + 'k';
    $.ajax({
        type: "POST",
        url: "teamcount.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
            $('#loadingar').html('');
            if (response == 11) {
				$(".fancybox").removeAttr('disabled');
                $(".fancybox").fancybox().trigger('click');
                getplayers();
            } else if ('Team Complete!')
                $('.fancybox').attr('disabled','disabled');
            else
                $('.fancybox').attr('disabled','disabled');
        }
    });
}

function teamcount2() {
    var datastring = 'player_id=' + 'k';
    $.ajax({
        type: "POST",
        url: "teamcount2.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
            $('#loadingar').html('');
            if (response == 22) {
				$(".fancybox").removeAttr('disabled');
                $(".fancybox").fancybox().trigger('click');
                getplayers();
            } else if ('Team Complete!')
                $('.fancybox').attr('disabled','disabled');
            else
                $('.fancybox').attr('disabled','disabled');
        }
    });
}

function getplayers() {
    var cvc = "captain";

    $.ajax({
        type: "POST",
        url: 'show.php',
        data: cvc,
        dataType: 'json',

        success: function(response) {

            var select = $('#captain'),
                options = '';
            select.empty();
            var select2 = $('#vicecaptain'),
                options2 = '';
            select2.empty();
            for (var i = 0; i < response.length; i++) {
                options += "<option value='" + response[i].value + "'>" + response[i].text + "</option>";
                options2 += "<option value='" + response[i].value + "'>" + response[i].text + "</option>";
            }

            select.append(options);
            select2.append(options2);
        }
    });
}

function storeCaptain() {
    if ($('#captain').val() == "Choose a Player") {
        $('#response').html("You Must Choose a Captain");
    } else if ($('#vicecaptain').val() == "Choose a Player") {
        $('#response').html("You Must Choose a Vice-Captain");
    } else if ($('#captain').val() == $('#vicecaptain').val()) {
        $('#response').html("Both Captain & Vice-Captain cannot be the same!");
    } else {
        $('#submit').attr('disabled', 'disabled');
        var datastring = 'captain=' + $('#captain').val() + '&vicecaptain=' + $('#vicecaptain').val();
        $.ajax({
            type: "POST",
            url: "storeCaptain.php",
            cache: false,
            data: datastring,
            beforeSend: function() {
                $('#response').html('<img src="images/loading.gif" width="48" height="48" />');
            },
            success: function(response) {
                $('#submit').removeAttr('disabled');
                if (response == 0) {

                    $('#response').html('You Must Choose a Captain and a Vice-Captain & both should be different');
                } else if (response == 4) {

                    $('#response').html('You must form a team of playing 11 to select a Captain or a Vice-Captain!');
                } else if (response == 7) {

                    $('#response').html('You have already chosen your Captain & Vice-Captain!');
                } else {
                    $('#response').html('');
                    $.fancybox.close();
                    swal({
                        title: "Done!",
                        text: "Your team is ready for the match! ;)",
                        timer: 2000
                    });
                    $('.fancybox').attr('disabled','disabled');
					$('#teamcomplete').html('<img src="images/tc.png" style="width:48px;height:48px;" />');
                }
            }
        });
    }
}

function add2(player_id, name) {
    var flag;
    var BID = "#" + player_id;
    $(BID).attr('disabled','disabled');
    $(BID).hide();
    $(BID).addClass("tick");
    $(BID).html('<img src="images/tick.png" />');
    $(BID).show();
    flag = 1;
    var datastring = 'player_id=' + player_id + '&flag=' + flag;
    $.ajax({
        type: "POST",
        url: "add2.php",
        cache: false,
        data: datastring,
        beforeSend: function() {
            $('#loadingar').html('<img width="48px" height="48px" src="images/loading.gif" />');
        },
        success: function(response) {
            $('#loadingar').html('');
            if (response == 'Spread the love!') {

                swal({
                    title: "Spread the love.",
                    text: "Max 14 cricketers allowed from 1 team!",
                    imageUrl: "images/wrong.png",
                    timer: 4000,
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 97) {

                swal({
                    title: "Oops!",
                    text: "You cannot Add a Player more than once!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 99) {

                swal({
                    title: "Oops!",
                    text: "You cannot Remove a Player which you have not even added!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No Wicket-Keeper!') {

                swal({
                    title: "Dude - where's your keeper?",
                    text: "No team is complete without a wicket-keeper",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No All-Rounder!') {

                swal({
                    title: "All-rounder missing",
                    text: "Every team needs atleast 2 All-rounders",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No Wicket-Keeper and no All-Rounder!') {

                swal({
                    title: "Wicket-Keeper and All-Rounder Missing!",
                    text: "Every team needs atleast 2 All-rounders and atleast 2 Wicket-Keepers",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No bowler!') {

                swal({
                    title: "Bowler Missing!",
                    text: "Every team needs atleast 6 Bowlers!",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'No batsman!') {

                swal({
                    title: "Batsman Missing!",
                    text: "Every team needs atleast 6 batsman",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max Wicket-Keeper!') {

                swal({
                    title: "Wicket-keeper Overdose!",
                    text: "You gotta have a balanced team.\nMax 2 wicket-keeper allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max All-Rounder!') {

                swal({
                    title: "All-Rounder Overdose!",
                    text: "You gotta have a balanced team. \nMax 6 all-rounders allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max bowler!') {

                swal({
                    title: "Bowler Overdose!",
                    text: "You gotta have a balanced team. \nMax 10 bowlers allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max batsman!') {

                swal({
                    title: "Batsman Overdose!",
                    text: "You gotta have a balanced team. \nMax 10 batsman allowed",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Max team limit!') {

                swal({
                    title: "That's 23 too many",
                    text: "You can't choose more than 22 cricketers in your team",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else if (response == 'Not enough credits!') {

                swal({
                    title: "You're maxed out !",
                    text: "Sorry, you don't have enough credits left !",
                    imageUrl: "images/wrong.png",
                    timer: 4000
                });
				$(BID).removeAttr('disabled');
                $(BID).html('Add');
                $(BID).removeClass('tick');
            } else {
				$('#teamcomplete').html('');
                var res = response.split(" ");
                $('#rc').html(res[0]);
                $('#tc').html(res[1] + '/22');
                teamcount2();
                s();
            }
        }
    });

}