# We are going to use the same repository, if anything I can say use this and download
# I just am drawing a blank as to what todo inorder to make website work.
# Going to make Python app instead - for now, have it for both

#Declaring variables and functions
done = "Done Editing!"
choiceTxt = "Options: 1) Add Money. 2)Add Expense "
dailyIncome = 0
dailyExpense = 0
global weeklyIncome
global weeklyExpense

def checkFlag():
    return input("Continue editing?: y/n ")

def addIncome():
    # dailyIncome = float(input("Add Income: "))
    # weeklyIncome += dailyIncome
    # return
    return float(input("Add Income: "))

def addExpense():
    # dailyExpense = float(input("Add Expense: "))
    # weeklyExpense += dailyExpense
    # return 
    return float(input("Add Expense: "))

# def calcMoney(choice, addToTotal):
#     weeklyIncome += addToTotal          

def editDay(day):
    check = "y"

    while(check == "y"):
        if(day == "m"):
            print("Monday")
            while(check == "y"):
                choice = int(input(choiceTxt))
                if(choice == 1):
                    print("Adding Income")
                    dailyIncome = addIncome()
                    #calcMoney(dailyIncome)
                    # weeklyIncome = dailyIncome 
                elif(choice == 2):
                    print("Adding Expense")
                    dailyExpense = addExpense()
                    weeklyExpense = dailyExpense
                else:
                    print("Invalid entry")    
                check = checkFlag()
                # calcMoney()
            print(done + " Monday")
            print(weeklyIncome)
            print(weeklyExpense)

def dayOfWeek():
    print("What day do you want to edit?")
    print("Monday: m")
    print("Tuesday: t")
    print("Wednesday: w")
    print("Thursday: th")
    print("Friday: f")
    print("Saturday: sa")
    print("Sunday: su")

def main():
    print("This is the money planner Test program")
    check = "y"

    #We are going to enter the loop here to go and edit things for the week
    while(check == "y"):
        #Asking the user how much money they have at the start of the week
        startingIncome = float(input("Money at the beginning of week: "))
        weeklyIncome = startingIncome
        dayOfWeek()
        day =  input("day: ")
        editDay(day)

        check = checkFlag()

    print(done)

main()