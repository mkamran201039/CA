
const professionSelect = document.getElementById("profession");
const checkEligibilityBtn = document.getElementById("check-eligibility");
const questionContainer = document.getElementById("question-container");
const judgeBtn = document.getElementById("judge");
const result = document.getElementById("result");

function checkEligibility() 
{
 
	const profession =  document.getElementById("profession").value;
  
	if (profession == "none") {
		document.getElementById("question-container").style.display = "none";
		alert("Please select a profession");
		
	} else if (profession == "web developer"){
		
		
              document.getElementById("question-container").style.display = "block";
              document.getElementById("question-container2").style.display = "none";
	}

	else if (profession == "graphic designer"){
		
		
		document.getElementById("question-container2").style.display = "block";
        document.getElementById("question-container").style.display = "none";
}
};






function calculatePoints() {
        // Get the selected radio button value
        var selectedValue = document.querySelector('input[name="experience"]:checked').value;

        // Calculate the point value based on the selected option
        var points;
		if (selectedValue === "0") {
          points = 0;
        }
        else if (selectedValue === "1") {
          points = 1;
        } else if (selectedValue === "2") {
          points = 2;
        } else if (selectedValue === "3") {
          points = 3;
        }



            selectedValue = document.querySelector('input[name="frontend"]:checked').value;

            if (selectedValue === "0") {
            points += 0;
            }
            if (selectedValue === "1") {
            points += 1;
            } else if (selectedValue === "2") {
            points += 2;
            } else if (selectedValue === "3") {
            points += 3;
            }
			else if (selectedValue === "4") {
            points += 4;
            }

        
			selectedValue = document.querySelector('input[name="backend"]:checked').value;

		if (selectedValue === "0") {
          points += 0;
        }
        else if (selectedValue === "1") {
          points += 1;
        } else if (selectedValue === "2") {
          points += 2;
        } else if (selectedValue === "3") {
          points += 3;
        }	



		selectedValue = document.querySelector('input[name="database"]:checked').value;

			if (selectedValue === "0") {
			points += 0;
			}
			else if (selectedValue === "1") {
			points += 1;
			} else if (selectedValue === "2") {
			points += 2;
			} else if (selectedValue === "3") {
			points += 3;
			}	






		
			selectedValue = document.querySelector('input[name="database"]:checked').value;

				if (selectedValue === "0") {
				points += 0;
				}
				else if (selectedValue === "1") {
				points += 1;
				} else if (selectedValue === "2") {
				points += 2;
				} 	

        // Display the point value
		if(points<13)
		{   document.getElementById("points").style.color="red";
			document.getElementById("points").innerHTML = "<h3><i>You scored " + points + " point(s) out of 13 , try to improve!</i> </h3>";
		}
        
		else
		{   
			document.getElementById("points").style.color="green";
			document.getElementById("points").innerHTML = "<h3>You scored " + points + " point(s) out of 13 ,  You are an excellent candidate!</h3>";
		}

      }


	
	  








	  function calculatePoints2() {
        // Get the selected radio button value
		
        var selectedValue = document.querySelector('input[name="experience"]:checked').value;

        // Calculate the point value based on the selected option
        var points;
		if (selectedValue === "0") {
          points = 0;
        }
        else if (selectedValue === "1") {
          points = 1;
        } else if (selectedValue === "2") {
          points = 2;
        } else if (selectedValue === "3") {
          points = 3;
        }



            selectedValue = document.querySelector('input[name="theory"]:checked').value;

            if (selectedValue === "0") {
            points += 0;
            }
            if (selectedValue === "1") {
            points += 1;
            } 

        
		selectedValue = document.querySelector('input[name="tool"]:checked').value;

		if (selectedValue === "0") {
          points += 0;
        }
        else if (selectedValue === "1") {
          points += 1;
        } else if (selectedValue === "2") {
          points += 2;
        } else if (selectedValue === "3") {
          points += 3;
        }	



		selectedValue = document.querySelector('input[name="ui"]:checked').value;

			if (selectedValue === "0") {
			points += 0;
			}
			else if (selectedValue === "1") {
			points += 1;
			} 	






		
			selectedValue = document.querySelector('input[name="video"]:checked').value;

				if (selectedValue === "0") {
				points += 0;
				}
				else if (selectedValue === "1") {
				points += 1;
				} 	

        // Display the point value
		if(points<9)
		{   document.getElementById("points2").style.color="red";
			document.getElementById("points2").innerHTML = "<h3><i>You scored " + points + " point(s) out of 9 , try to improve!</i> </h3>";
		}
        
		else
		{   
			document.getElementById("points2").style.color="green";
			document.getElementById("points2").innerHTML = "<h3>You scored " + points + " point(s) out of 9 ,  You are an excellent candidate!</h3>";
		}

}
