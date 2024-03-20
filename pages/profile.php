<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/style.css">
    <style>
        .personal_info{
            display:flex;
            align-items: center;
            justify-content: center;
            margin:0 100px;
        }
        .profile_pic{
            width:40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding:3rem;
        }
        .profile_info{
            width:60%;
            font-size: 1.2rem;
            position: relative;
            top: -30px;

        }
        .btn{
            width:200px;
            border-radius: 15px;
            border: 3px solid black;
            padding:5px 10px;
            font-size: large;
            font-weight: 500;
            margin-top:1rem;
        }
        .red_btn{
            border-color: crimson;
        }
        .red_btn:hover{
            background-color:#FF7C8E;
        }
        .edit_btn:hover{
            background-color:#DCDAF2;
        }
        .bold{
            font-weight:500;
            line-height: 2.2rem;
        }
        td {
            padding: 5px 15px;
        }
    </style>
</head>
<body>
    <div class="personal_info">
        <div class="profile_pic">
            <img src="../assets/icons/ProfileIcon.png" alt="profile_icon" height="200rem">
            <button class="edit_btn btn">Edit</button>
            <button class="red_btn btn" btn>Logout</button>
        </div>
        <div class="profile_info">
            <table >
                <tr>
                    <td class="bold">Name: </td>
                    <td>Asmitha</td>
                </tr>
                <tr>
                    <td class="bold">Age: </td>
                    <td>19</td>
                </tr>
                <tr>
                    <td class="bold">Mobile NO: </td>
                    <td>9004764024</td>
                </tr>
                <tr>
                    <td class="bold">Vendor: </td>
                    <td>Fresho</td>
                </tr>
                <tr>
                    <td class="bold">Address: </td>
                    <td>Maria Anders</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>